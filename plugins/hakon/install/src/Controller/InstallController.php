<?php

namespace Plugin\Hakon\Install\Controller;

use App\Http\Controllers\Controller;

class InstallController extends Controller
{

    public function setup()
    {

        echo view("install::step-1");

    }

    public function status()
    {

        # Vars
        $output = array(
            "installation_status" => "OK"
        );

        return response()->json($output);

    }

    public function stepTwo(){

        echo view("install::step-2");

    }

}