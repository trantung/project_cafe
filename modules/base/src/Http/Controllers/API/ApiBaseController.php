<?php

namespace APV\Base\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use APV\Base\Constants\BaseResponseCode;

class ApiBaseController extends Controller
{
    /**
     * Success response method.
     * @param $data
     * @param string $message
     * @param int $responseCode
     * @return JsonResponse
     */
    public function sendSuccess($data, $message = 'Success', $responseCode = BaseResponseCode::SUCCESS)
    {
        $response = [
            'success' => true,
            'response_code' => $responseCode,
            'data' => $data,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    /**
     * Return error response.
     * @param $errorCode
     * @param array $errorMessages
     * @return JsonResponse
     */
    public function sendError($errorCode, $errorMessages = [])
    {
        if (is_string($errorMessages)) {
            $errorCode['message'] = $errorMessages;
        }

        if (is_string($errorCode['message'])) {
            $message = trans('messages.' . $errorCode['message']);
        } else {
            $message = [];
            foreach ($errorCode['message'] as $key => $value) {
                $message[$key] = [trans('messages.' . $value[0])];
            }
        }
        $response = [
            'success' => false,
            'response_code' => $errorCode['code'],
            'message' => $message,
        ];

        if (!empty($errorMessages)) {
            $response['errors'] = [];
            foreach ($errorMessages as $key => $value) {
                $response['errors'][$key] = [trans('messages.' . $value[0])];
            }
        }

        return response()->json($response, 400);
    }
}
