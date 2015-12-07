<?php

namespace Vive\Http\Controllers;
use Illuminate\Http\Request;
use Vive\User;
use Auth;
use Vive\Http\Requests;
use Vive\Http\Controllers\Controller;

class ProfileController extends Controller
{
   public function index($username)
   {
   		$user = User::where('username', $username)->first();

   		if(!$user)
   		{
   			abort('404');
   		}
   		return view('profile.index')->with('user', $user);
   }

   public function edit()
   {
   		return view('profile.edit');
   }


   public function update(Request $request)
   {
   
   		$this->validate($request, [
   			'first_name'	=> 'alpha|max:35',
   			'last_name'		=> 'alpha|max:35',
   			'location'		=> 'max:25',
   			]);

   		Auth::user()->update([
   			'first_name'	=>	$request->input('first_name'),
   			'last_name'		=>	$request->input('last_name'),
   			'location'		=>	$request->input('location'),
   		]);
  

   		return redirect()->back()->with(['success'=>'Successfully updated your profile information']);
   }

}
