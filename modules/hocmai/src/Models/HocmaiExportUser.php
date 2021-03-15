<?php
namespace APV\Hocmai\Models;

use Maatwebsite\Excel\Concerns\ToModel;

class HocmaiExportUser implements ToModel
{

    public function model(array $row)
    {
        return new HocmaiNotifyDevice([
            'user_id'     => $row[0],
        ]);
    }
}
