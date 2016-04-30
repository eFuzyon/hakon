<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use eFuzyon\String as String;
use eFuzyon\Password as Password;
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

        # Vars
        $username = String::Clean($_POST['username']);
        $password = String::Clean($_POST['password']);
        $password = Password::Generate($password);
        $admin = null;

        # Code
        if ($username && $password) :

            $adminObj = new Admin();
            $admin = $adminObj->where("username", $username)
                                ->where("password", $password)
                                ->first();

        endif;

    	# Output
        if (!empty($admin)) :

            // ...

        else:

            return view('core.hakon-admin.pages.index', 
            [
                "application" => $application,
                "messages" => (object) [
                    "error" => "<strong>Username and password invalid.</strong> <br /> Please try again."
                ]
            ]);

        endif;

    }
}
