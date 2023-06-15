<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendSuccess($result, $message, $code = 200) {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];
        return response()->json($response, $code);
    }

    public function sendError($message, $code= 400) {
        $response = [
            'success' => false,
            'message' => $message
        ];
        return response()->json($response, $code);
    }
}
