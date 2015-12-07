<?php

namespace Vive\Http\Controllers;

use Illuminate\Http\Request;
Use Vive\User;
use Vive\Http\Requests;
use DB;
use Vive\Http\Controllers\Controller;

class SearchController extends Controller
{
    
    public function getResults(Request $request)
    {
    	$query = $request->input('query');

    	if(!$query)
    	{
    		return redirect()->route('home');
    	}

    	$users = User::where(DB::raw("CONCAT(first_name,' ', last_name)"), 'LIKE', "%{$query}%")
    			->orWhere('username','LIKE', "%{$query}%")
    			->get();
    		
    	return view('search.results')->with('users', $users);
    }


}
