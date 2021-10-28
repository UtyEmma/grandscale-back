<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    function login (){
        return view('admin.auth.login');
    }

    function dashboard(){
        return view('admin.dashboard');
    }

}
