<?php
namespace APV\Hocmai\Services;

use APV\Hocmai\Models\HocmaiLesson;

use APV\Base\Services\BaseService;

class HocmaiBackendService extends BaseService
{
    public function getFilterDefault($input)
    {
        $data = [
            'First login'
        ];
    }
    public function getFilterList($input)
    {

    }
}
