<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){
        return view('Admin.admin_login');
    }//end method

    public function dashboard(){
        return view('Admin.index');
    }
}
