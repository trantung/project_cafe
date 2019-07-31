<?php
namespace APV\Level\Services;

use APV\Level\Models\Level;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Http\Request;

class LevelService extends BaseService
{
    public function __construct(Level $model)
    {
        parent::__construct($model);
    }

    public function createLevel($input)
    {
        $levelId = Level::create($input)->id;
        if (!$levelId) {
            return false;
        }
        return $levelId;
    }

    public function getList()
    {
        $data = Level::all();
        return $data->toArray();
    }

    public function getDetail($levelId)
    {
        $level = Level::find($levelId);
        if (!$level) {
            return false;
        }
        return $level->toArray();
    }

    public function postEdit($levelId, $input)
    {
        $level = Level::find($levelId);
        if (!$level) {
            return false;
        }
        $level->update($input);
        return true;
    }

    public function postDelete($levelId)
    {
        $level = Level::find($levelId);
        if (!$level) {
            return false;
        }
        Level::destroy($levelId);
        return true;
    }
}
