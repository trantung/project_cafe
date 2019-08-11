<?php
namespace APV\Table\Services;

use APV\Table\Models\Table;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class TableService extends BaseService
{
    public function __construct(Table $model)
    {
        parent::__construct($model);
    }

    public function create($input)
    {
        $input['qr_code'] = renderQrCode();
        $tableId = Table::create($input)->id;
        if (!$tableId) {
            return false;
        }
        Table::find($tableId)->update(['qr_code' => $$input['qr_code']]);
        return $input['qr_code'];
    }

    public function getList()
    {
        $data = Table::all();
        return $data->toArray();
    }

    public function getDetail($tableId)
    {
        $table = Table::find($tableId);
        if (!$table) {
            return false;
        }
        return $table->toArray();
    }

    public function postEdit($tableId, $input)
    {
        $table = Table::find($tableId);
        if (!$table) {
            return false;
        }
        $table->update($input);
        return true;
    }

    public function postDelete($tableId)
    {
        $table = Table::find($tableId);
        if (!$table) {
            return false;
        }
        Table::destroy($tableId);
        return true;
    }
}
