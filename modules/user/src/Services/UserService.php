<?php

namespace APV\User\Services;

use APV\User\Models\User;
use APV\Base\Services\BaseService;
use APV\User\Models\UserReasonToLeave;
use APV\User\Models\UserTokenLeave;
use APV\User\Models\UserPoint;
use APV\User\Models\UserPointHistory;
use APV\User\Transformers\UserTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use APV\User\Constants\UserDataConst;

/**
 * Class UserService
 * @package APV\User\Services
 */
class UserService extends BaseService
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var UserTransformer
     */
    private $userTransformer;

    /**
     * UserService constructor.
     * @param User $model
     * @param Manager $fractal
     * @param UserTransformer $userTransformer
     */
    public function __construct(User $model, Manager $fractal, UserTransformer $userTransformer)
    {
        parent::__construct($model);
        $this->fractal = $fractal;
        $this->userTransformer = $userTransformer;
    }

    /**
     * Store a newly created resource in storage
     * @param array $arrData
     * @return array
     */
    public function create($arrData)
    {
        $arrData['activation_code'] = time() . Str::random(8);
        $arrData['register_at'] = Carbon::now();
        $arrData['password'] = Hash::make($arrData['password']);
        if (isset($arrData['receive_news'])) {
            $arrData['receive_news'] = UserDataConst::RECEIVE_NEW['YES'];
        }
        $user = $this->model->create($arrData);

        return [
            'user' => $this->show($user->id),
            'activation_code' => $user->activation_code,
        ];
    }

    /**
     * Display the specified resource
     * @param $userId
     * @return array
     */
    public function show($userId)
    {
        $user = $this->model->find($userId);
        $user = new Item($user, new $this->userTransformer());
        $user = $this->fractal->createData($user);

        return $user->toArray();
    }

    /**
     * Update activation infor when resend verify email
     * @param $email
     * @return array
     */
    public function updateActivationInfor($email)
    {
        $user = $this->model->where('email', $email)->first();
        $user->activation_code = time() . Str::random(8);
        $user->register_at = Carbon::now();
        $user->save();

        return [
            'user' => $this->show($user->id),
            'activation_code' => $user->activation_code,
        ];
    }

    /**
     * Active account by code
     * @param $activationCode
     * @return array
     */
    public function activeAccountByCode($activationCode)
    {
        $user = $this->model->where('activation_code', $activationCode)
            ->where('register_at', '>=', Carbon::now()->addDay(-1)) //expired in 24h
            ->first();

        if ($user) {
            $user->actived = true;
            $user->activation_code = null;
            $user->email_verified_at = Carbon::now();
            $user->save();

            $this->initPointForUser($user);

            return [
                'success' => true,
                'user' => $user,
            ];
        }

        return [
            'success' => false,
            'user' => null,
        ];
    }

    /**
     * Change password
     * @param $email, $password
     * @return User
     */
    public function changePassword($email, $password)
    {
        $user = $this->model->where('email', $email)->firstOrFail();
        $user->update(['password' => Hash::make($password)]);

        return $user;
    }

    /**
     * Get user by email
     * @param $email
     * @return User
     */
    public function getUserByEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }

    /**
     * Check no change password
     * @param $email, $password
     * @return bool
     */
    public function checkNoChangePassword($email, $password)
    {
        $user = $this->model->where('email', $email)->firstOrFail();

        return Hash::check($password, $user->password);
    }

    /**
     * Check active account
     * @param $email
     * @return bool
     */
    public function isActive($email)
    {
        $user = $this->model->where('email', $email)->first();

        return $user->actived === UserDataConst::USER_STATUS['ACTIVATED'];
    }

    /**
     * Get user with trashed
     * @param $username
     * @return mixed
     */
    public function getUserWithTrashed($username)
    {
        return $this->model->withTrashed()->where('username', $username)->first();
    }

    /**
     * Get top of my page
     * @param User $user
     * @return array
     */
    public function getMyPageTop(User $user)
    {
        if ($user->userPoint()->count() === 0) {
            $this->initPointForUser($user);
        }

        return [
            'username' => $user->username,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'point' => $user->userPoint->total
        ];
    }

    /**
     * Get personal info
     * @param User $user
     * @return array
     */
    public function getPersonalInfo(User $user)
    {
        return [
            'username'   => $user->username,
            'first_name' => $user->first_name,
            'last_name'  => $user->last_name,
            'birthday'   => $user->birthday,
            'gender'     => $user->gender,
        ];
    }

    /**
     * Change personal info
     * @param User $user
     * @param $data
     * @return bool
     */
    public function changePersonalInfo(User $user, $data)
    {
        return $user->update($data);
    }

    /**
     * Check password when login
     * @param $username, $password
     * @return bool
     */
    public function checkPassword($username, $password)
    {
        $user = $this->model->where('username', $username)->firstOrFail();

        return Hash::check($password, $user->password);
    }

    /**
     * Change password when user Auth
     * @param User $user
     * @param $newPassword
     * @return bool
     */
    public function changePasswordAfterAuth(User $user, $newPassword)
    {
        return $user->update(['password' => Hash::make($newPassword)]);
    }

    /**
     *  Update or create new token leave in storage
     * @param User $user
     * @return mixed
     */
    public function createOrUpdateTokenLeave(User $user)
    {
        return UserTokenLeave::updateOrCreate(
            ['user_id' => $user->id],
            ['token' => Str::random(60)]
        );
    }

    /**
     * Find token leave record by token
     * @param $token
     * @return mixed
     */
    public function findTokenLeave($token)
    {
        return UserTokenLeave::where('token', $token)->first();
    }

    /**
     * Save reason to leave
     * @param $userId
     * @param $dataArr
     * @return mixed
     */
    public function saveReasonLeave($userId, $dataArr)
    {
        return UserReasonToLeave::create([
            'user_id' => $userId,
            'type' => $dataArr['type'],
            'detail' => $dataArr['detail'],
        ]);
    }

    /**
     * Get user none trashed
     * @param $username
     * @return mixed
     */
    public function getUserNoneTrashed($username)
    {
        return $this->model->where('username', $username)->first();
    }

    /**
     * Init point for user
     * @param User $user
     */
    public function initPointForUser(User $user)
    {
        $userPoint = new UserPoint();
        $userPoint->user_id = $user->id;
        $userPoint->total = UserDataConst::USER_INIT_POINT;
        $userPoint->save();

        $userPointHistory = new UserPointHistory();
        $userPointHistory->user_id = $user->id;
        $userPointHistory->point = UserDataConst::USER_INIT_POINT;
        $userPointHistory->type = UserDataConst::USER_CHANGE_POINT['ADD'];
        $userPointHistory->save();
    }

    /**
     * Check user name
     * @param $dataArr
     * @return bool
     */
    public function isUserName($dataArr)
    {
        $user = $this->model->where('email', $dataArr['email'])->first();
        return $user->first_name == $dataArr['first_name'] && $user->last_name == $dataArr['last_name'];
    }
}
