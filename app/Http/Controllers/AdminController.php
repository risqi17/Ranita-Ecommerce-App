<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
        //return 'success';
    }

    public function login(){
        return view('admin.page_login');
    }


}
