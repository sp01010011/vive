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
    	$requests = Auth::user()->friendRequests();
    	return view('friends.index')->with('friends', $friends)
    								->with('requests', $requests);
    }
}
