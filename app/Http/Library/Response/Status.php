<?php

namespace App\Http\Library\Response;

class Status {
    static function success (string $message, array $data) {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    static function error (int|string $code, string $message="", array $data=[]){
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => $data
        ], is_int($code) ? $code : 500);
    }

    static function redirect (bool $status, $message, $route = ""){
        if ($route) {
            return redirect()->to($route)->with([
                $status => $message
            ]);
        }

        return redirect()->back()->with([
            $status => $message
        ]);
    }
}
