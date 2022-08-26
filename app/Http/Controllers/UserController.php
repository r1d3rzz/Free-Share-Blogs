<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function register()
    {
        $formData = request()->validate([
            'name' => ['required','min:3','max:20'],
            'username' => ['required','min:3','max:20',Rule::unique('users','username')],
            'email' => ['required',Rule::unique('users','email')],
            'password' => ['required'],
            're_password' => ['required'],
        ]);

        if(request('password') != request('re_password')){
            return back()->withErrors([
                're_password' => "Your Re_password is doesn't match wih Password"
            ]);
        }else{
            if(request('checkBox') != 'true'){
                return back()->withErrors([
                    'checkBox' => "Please Agree our Teams and Condition",
                ]);
            }else{
                $user = User::create($formData);
                auth()->login($user);
                return redirect('/');
            }
        }
    }

    public function post_login()
    {
        $formData = request()->validate([
            'email' => ['required',Rule::exists('users','email')],
            'password' => ['required'],
        ]);

        if(!auth()->attempt($formData)){
            return back()->withErrors([
                'email' => 'Email or Password is Wrong',
            ]);
        }else{
            return redirect('/');
        }
    }
}
