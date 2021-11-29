<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use App\Library\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }
    public function index()
    {
        return view('admin.page_login');
    }

    public function dologin(Request $request)
    {
        $check_user = Auth::authenticate($request->username, $request->password);

        if ($check_user['status'] == 1) {
            return redirect('admin/dashboard');
            //return 'status = 1';
        } else {
            return redirect('auth/login');
            //return 'status <> 1';
        }
    }

    public function logout()
    {
        session()->forget('user');

        return redirect('auth/login');
    }
}
