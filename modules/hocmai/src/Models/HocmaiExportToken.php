<?php
namespace APV\Hocmai\Models;

use Maatwebsite\Excel\Concerns\FromCollection;

class HocmaiExportToken implements FromCollection
{

    public function collection()
    {
//        if (!empty($this->listUser)) {
//            HocmaiTokenExport::whereIn('hocmai_user_id', $this->listUser)->pluck('device_token');
//        }
        set_time_limit(0);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');
        return HocmaiTokenExport::all();
    }
}
