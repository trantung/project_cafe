<?php
namespace APV\Hocmai\Services;

use APV\Hocmai\Models\HocmaiLesson;
use APV\Hocmai\Models\HocmaiApp;
use APV\Hocmai\Models\HocmaiCity;
use APV\Base\Services\BaseService;
use APV\Hocmai\Constants\HocmaiDataConst;


class HocmaiBackendService
{
    public function firstSession()
    {
        $data = [
            'filter_id' => 1,
            'filter_name' => 'First Session',
            'type_id' => HocmaiDataConst::TYPE_DATE,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                
            ],
        ];
        return $data;
    }

    public function lastSession()
    {
        $data = [
            'filter_id' => 2,
            'filter_name' => 'Last Session',
            'type_id' => HocmaiDataConst::TYPE_DATE,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                
            ],
        ];
        return $data;
    }

    public function getListAppVerison()
    {
        $res = [];
        $data = HocmaiApp::all();
        foreach ($data as $key => $value) {
            $res[$key]['option_id'] = $value->id;
            $res[$key]['option_name'] = $value->app_version;
        }
        return $res;
    }

    public function appVersion()
    {
        $data = [
            'filter_id' => 1,
            'filter_name' => 'App version',
            'type_id' => HocmaiDataConst::TYPE_OPTION,
            'operator' => [
                [
                    'id' => 1,
                    'name' => HocmaiDataConst::OPERATOR_GREATER,
                ],
                [
                    'id' => 2,
                    'name' => HocmaiDataConst::OPERATOR_LESS,
                ],
                [
                    'id' => 3,
                    'name' => HocmaiDataConst::OPERATOR_GREATER_EQUAL,
                ],
                [
                    'id' => 4,
                    'name' => HocmaiDataConst::OPERATOR_LESS_EQUAL,
                ],
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ],
                [
                    'id' => 6,
                    'name' => HocmaiDataConst::OPERATOR_NOT_EQUAL,
                ],
            ],
            'option' => $this->getListAppVerison(),
        ];
        return $data;
    }

    public function getListCity()
    {
        $res = [];
        $data = HocmaiCity::all();
        foreach ($data as $key => $value) {
            $res[$key]['option_id'] = $value->id;
            $res[$key]['option_name'] = $value->name;
        }
        return $res;
    }
    
    public function location()
    {
        $data = [
            'filter_id' => 1,
            'filter_name' => 'Location',
            'type_id' => HocmaiDataConst::TYPE_OPTION,
            'operator' => [
                [
                    'id' => 5,
                    'name' => HocmaiDataConst::OPERATOR_EQUAL,
                ],
                [
                    'id' => 6,
                    'name' => HocmaiDataConst::OPERATOR_NOT_EQUAL,
                ],
            ],
            'option' => $this->getListCity(),
        ];
        return $data;
    }


    public function getFilterList($input)
    {
        $data = [
            1 => $this->firstSession(),
            2 => $this->lastSession(),
            8 => $this->appVersion(),
            10 => $this->location(),
        ];
        return $data;
    }

}
