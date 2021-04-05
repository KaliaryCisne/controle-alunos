<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseSuccess($message, $statusCode)
    {
        return response()->json([
            'status' => 'success',
            'data' => $message,
        ], $statusCode);
    }

    public function responseFail($message, $statusCode)
    {
        return response()->json([
            'status' => 'error',
            'data' => null,
            'message' => $message
        ], $statusCode);
    }
}
