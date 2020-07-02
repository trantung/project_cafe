<?php
namespace APV\Promotion\Http\Controllers\API;

use APV\Base\Http\Controllers\API\ApiBaseController;
use APV\Promotion\Services\PromotionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use APV\Promotion\Constants\PromotionResponseCode;
use APV\Base\Services\ApiAuth;
/**
 * Class PromotionApiController
 * @package APV\Promotion\Http\Controllers\API
 * @property PromotionService $promotionService
 */
class VoucherApiController extends ApiBaseController
{
    public function __construct(PromotionService $promotionService, ApiAuth $apiAuth)
    {
        $this->promotionService = $promotionService;
        $this->apiAuth = $apiAuth;
    }

    public function voucherGetList(Request $request)
    {
        $input = $request->all();
        $data = $this->promotionService->voucherGetList($input);
        return $this->sendSuccess($data, 'success');
    }

    public function voucherGetDetail(Request $request)
    {
        $input = $request->all();
        $data = $this->promotionService->voucherGetDetail($input);
        return $this->sendSuccess($data, 'success');
    }
    
    public function voucherCheckCode(Request $request)
    {
        $input = $request->all();
        $data = $this->promotionService->voucherCheckCode($input);
        return $this->sendSuccess($data, 'success');
    }
    
    public function voucherApplyCode(Request $request)
    {
        $input = $request->all();
        $data = $this->promotionService->voucherApplyCode($input);
        return $this->sendSuccess($data, 'success');
    }
    
    
}
