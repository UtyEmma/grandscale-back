<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    function login (LoginRequest $request){
        try {
            if(!Auth::attempt($request->validated())){
                throw new Exception("Invalid Email or Password");
            }
        } catch (Exception $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }

        return redirect()->to('/');
    }

    function seedAdmin (){
        Artisan::call('seed:admin');

        return redirect()->to('/login')->with([
            'success' => "Default Admin Created! Please Login"
        ]);
    }
}
