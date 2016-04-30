<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use eFuzyon;
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

        # Faker
        $username = "hakoncms";
        $password = eFuzyon\Password::Generate("hakoncms");

        # Code
        $adminObj = new Admin();
        $admin = $adminObj->where("username", $username)
                            ->where("password", $password)
                            ->first();

    	# Output
    	return view('core.hakon-admin.pages.index', 
    	[
    		"application" => $application
    	]);

    }
}
