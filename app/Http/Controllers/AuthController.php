<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return view('admin.pages.home');
        }else{
            return view('admin.layouts.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            $user = User::where('email', $request->email)->limit(1)->get();
            if($user){
                foreach ($user as $key => $value) {
                    $roles = $value->roles;
                }
            }

            Session::put('roles', $roles);
            return redirect(route('dashboard'));
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
