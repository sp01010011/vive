<?php

namespace Vive\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Vive\Http\Requests;
use Vive\Http\Controllers\Controller;

class FriendController extends Controller
{
    
    public function index()
    {
    	$friends = Auth::user()->friends();
    	return view('friends.index')->with('friends', $friends);
    }
}
