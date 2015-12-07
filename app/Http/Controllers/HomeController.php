<?php

namespace Vive\Http\Controllers;

use Illuminate\Http\Request;

use Vive\Http\Requests;
use Vive\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }
}
