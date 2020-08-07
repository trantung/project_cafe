<?php

namespace APV\Base\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use APV\Base\Constants\BaseResponseCode;
use APV\Base\Constants\BaseDataConst;
use APV\Product\Constants\ProductDataConst;

class ApiBaseController extends Controller
{
    /**
     * Success response method.
     * @param $data
     * @param string $message
     * @param int $responseCode
     * @return JsonResponse
     */
    public function sendSuccess($data, $message = 'Success', $responseCode = BaseResponseCode::SUCCESS)
    {
        $response = [
            'success' => true,
            'response_code' => $responseCode,
            'data' => $data,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    /**
     * Return error response.
     * @param $errorCode
     * @param array $errorMessages
     * @return JsonResponse
     */
    public function sendError($errorCode, $errorMessages = [], $errorCodeApi = null)
    {
        if (is_string($errorMessages)) {
            $errorCode['message'] = $errorMessages;
        }

        if (is_string($errorCode['message'])) {
            $message = trans('messages.' . $errorCode['message']);
        } else {
            $message = [];
            foreach ($errorCode['message'] as $key => $value) {
                $message[$key] = [trans('messages.' . $value[0])];
            }
        }
        $response = [
            'success' => false,
            'response_code' => $errorCode['code'],
            'message' => $message,
        ];

        if (!empty($errorMessages)) {
            $response['errors'] = [];
            foreach ($errorMessages as $key => $value) {
                $response['errors'][$key] = [trans('messages.' . $value[0])];
            }
        }
        if ($errorCodeApi) {
            return response()->json($response, $errorCode);
        }
        return response()->json($response, 400);
    }

    public function getMeguuFee($input = null)
    {
        if (isset($input['using_at'])) {
            $usingAt = $input['using_at'];
            if ($usingAt == ProductDataConst::PRODUCT_USING_AT_SHOP) {
                return BaseDataConst::MEGUU_FEE_AT_SHOP;
            }
            if ($usingAt == ProductDataConst::PRODUCT_USING_AT_SHIP) {
                return BaseDataConst::MEGUU_FEE_AT_SHIP;
            }
        }
        return BaseDataConst::MEGUU_FEE_DEFAULT;
    }

    public function getCustomerAction()
    {
        //using_at = 1, customer co 2 option: 1: dùng tại quán, 2: Mang đi
        //using_at = 2, customer có 2 option: 3: Tôi dùng, 4: Mua tặng
        $res = [
            [
                'using_at' => ProductDataConst::PRODUCT_USING_AT_SHOP,
                'customer_option_chosse' => [
                    [
                        'customer_option_chosse_id' => BaseDataConst::CUSTOMER_ACTION_USING_AT_SHOP_USE_SHOP,
                        'customer_option_chosse_name' => 'Tại quán',
                        'active' => 1,
                    ],
                    [
                        'customer_option_chosse_id' => BaseDataConst::CUSTOMER_ACTION_USING_AT_SHOP_TAKE_AWAY,
                        'customer_option_chosse_name' => 'Mang đi',
                        'active' => 0,
                    ],
                ],
            ],
            [
                'using_at' => ProductDataConst::PRODUCT_USING_AT_SHIP,
                'customer_option_chosse' => [
                    [
                        'customer_option_chosse_id' => BaseDataConst::CUSTOMER_ACTION_USING_AT_SHIP_OWNER,
                        'customer_option_chosse_name' => 'Tôi dùng',
                        'active' => 1,
                    ],
                    [
                        'customer_option_chosse_id' => BaseDataConst::CUSTOMER_ACTION_USING_AT_SHIP_GIFT,
                        'customer_option_chosse_name' => 'Mua tặng',
                        'active' => 0,
                    ],
                ],
            ]
        ];
        return $res;
    }


}
