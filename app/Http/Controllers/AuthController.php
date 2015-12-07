<?php

namespace Vive\Http\Controllers;
use Illuminate\Http\Request;
use Vive\Http\Requests;
use Vive\Http\Controllers\Controller;
Use Vive\User;
Use Auth;
class AuthController extends Controller
{
    public function getSignup()
    {
    	return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
    	$this->validate($request,[
    		'email'		=>	'required|unique:users|email|max:255',
    		'username' 	=>	'required|unique:users|alpha_dash|max:20',
    		'password'	=>	'required|min:8',
    		]);
    	User::create([
    		'email'	=> $request->input('email'),
    		'username'	=> $request->input('username'),
    		'password'	=> bcrypt($request->input('password')),
    		]);

    	return redirect()->route('home')->with(['success'=>'Congratulations! your account has been created successfully you may login and connect with your friends!']);
    }

    public function getSignin()
    {
    	return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
    	$this->validate($request,[
    		'email'	=> 'required',
    		'password'	=> 'required',
    		]);

    	if(!Auth::attempt($request->only(['email','password']), $request->has('remember')))
    	{
    		return redirect()->back()->with(['error'=>'Invalid username or password, please try again']);
    	}

    	return redirect()->route('home')->with(['success'=>'Welcome to your own corner of the internet world']);
    }

    public function getSignout()
    {
    	Auth::logout();

    	return redirect()->route('auth.signin')->with(['success'=>'You have been successfully logged out of your account']);
    }


}
