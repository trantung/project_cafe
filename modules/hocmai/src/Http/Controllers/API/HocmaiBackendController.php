<?php
namespace APV\Hocmai\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Hocmai\Services\HocmaiBackendService;
use Illuminate\Http\Request;
use APV\Hocmai\Models\HocmaiLivestream;
/**
 * Class HocmaiBackendController
 * @package APV\Promotion\Http\Controllers\API
 * @property HocmaiBackendService $backend
 */
class HocmaiBackendController extends ApiBaseController
{
    public function __construct(HocmaiBackendService $backend)
    {
        $this->backend = $backend;
    }

    public function getFilterList(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->getFilterList($input);
        return $this->sendSuccess($data, 'success');
    }

    public function getContextList(Request $request)
    {
        $input = $request->all();
        $data = $this->backend->getContextList($input);
        return $this->sendSuccess($data, 'success');
    }

    public function demo()
    {
        $data = [
            [
                'hocmai_livestream_id' => 163,
                'name' => 'Học Tiếng Anh',
                'school_block_id' => 1,
            ],
            [
                'hocmai_livestream_id' => 162,
                'name' => 'Phân tích cấu trúc đề thi và định hướng phương pháp ôn thi Tiếng Anh vào 10 đạt hiệu quả',
                'school_block_id' => 3,
            ],
            [
                'hocmai_livestream_id' => 161,
                'name' => 'Lộ trình tự học môn Ngữ văn 9 và định hướng ôn thi vào 10',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 160,
                'name' => 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 8',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 159,
                'name' => 'Tổng quan kiến thức và định hướng phương pháp học tốt Ngữ văn 6',
                'school_block_id' => 2,
            ],
            [
                'livestream_id' => 158,
                'name' => 'Định hướng lộ trình tự học môn Toán 9 và chuẩn bị thi vào 10',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 156,
                'name' => 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 7',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 154,
                'name' => 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 6',
                'school_block_id' => 2,
            ],
            [
                'hocmai_livestream_id' => 153,
                'name' => 'Live hoạt hình',
                'school_block_id' => 1,
            ],
        ];
        foreach ($data as $value)
        {
            HocmaiLivestream::create($value);
        }
        dd(111);
    }
}
