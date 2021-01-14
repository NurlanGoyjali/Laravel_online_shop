<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

        if (session()->regenerate()){
            return view('admin.master');
        }else{
            return view('admin.login');
        }



    }
}
