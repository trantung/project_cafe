<?php
namespace APV\Hocmai\Models;

use Maatwebsite\Excel\Concerns\ToModel;

class HocmaiNotifyImport implements ToModel
{

    public function model(array $row)
    {
        return new HocmaiNotifyDevice([
            'device_token'     => $row[0],
        ]);
    }
}
