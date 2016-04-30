<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function Index(){

    	# Globals
    	global $application;

    	# Output 
    	return view('core.hakon-admin.pages.index', 
    	[
    		"application" => $application
    	]);

    }

    public function SignIn(){

    	# Globals
    	global $application;

        $adminObj = new Admin();

    	# Output
    	return view('core.hakon-admin.pages.index', 
    	[
    		"application" => $application
    	]);

    }
}
