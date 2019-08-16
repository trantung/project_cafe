<?php
namespace APV\Tag\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Tag\Services\TagService;
use APV\Tag\Services\InforService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Tag\Constants\TagResponseCode;
use APV\Base\Services\ApiAuth;

class InforApiController extends ApiBaseController
{
    public function __construct(TagService $tagService, ApiAuth $apiAuth, InforService $inforService)
    {
        $this->tagService = $tagService;
        $this->inforService = $inforService;
        $this->apiAuth = $apiAuth;
    }

    public function getList()
    {
        $data = $this->tagService->getList();
        return $this->sendSuccess($data, 'success');
    }

    public function postInfor(Request $request)
    {
        $input = $request->all();
        if (!$this->apiAuth->checkPermissionModule('common_infor', 'postInfor')) {
            return $this->sendError(TagResponseCode::ERROR_CODE_NO_PERMISSION);
        }
        $data = $this->inforService->postInfor($input);
        return $this->sendSuccess($data, 'Create success');
    }

}
