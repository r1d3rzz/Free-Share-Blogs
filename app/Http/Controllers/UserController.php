<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        return redirect('/')->with('logout','See Ya Soon Again...');
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
                return redirect('/')->with('success','Welcome '.$formData['name']);
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
            return redirect('/')->with('login','Welcome Back '.Auth::user()->name);
        }
    }

    public function show()
    {
        return view('auth.profile',[
            'user' => auth()->user()
        ]);
    }

    public function edit()
    {
        return view('auth.edit',[
            'user' => auth()->user()
        ]);
    }

    public function update(User $user)
    {
        $formData = request()->validate([
            'name' => ['required','min:3','max:20'],
            'username' => ['required','min:3','max:20',Rule::unique('users','username')->ignore($user->id)],
            'email' => ['required',Rule::exists('users','email')],
        ]);

        DB::table('users')->where('username',$user->username)->update($formData);

        return redirect('/user/profile')->with('updated','Updated Successfully');
    }
}
