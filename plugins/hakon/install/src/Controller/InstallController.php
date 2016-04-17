<?php

namespace Plugin\Hakon\Install\Controller;

use App\Http\Controllers\Controller;

class InstallController extends Controller
{

    public function __construct(){

        #self::setup();

    }

    public function setup()
    {

        # Vars
        $redirect = true;

        # Get installation status
        $status = self::status();

        # Check status
        if ($status) :

            if ( $statusObj = @$status->getData()) :

                if ($statusObj->installation_status != "OK") :

                    $redirect = false;

                endif;

            endif;

        endif;

        # Output
        if (!$redirect) :

            $this->stepOne();

        else:

            #if():
            #    return redirect("/");
            #else:
            #endif;

            #return true;
            return redirect("/");

        endif;

    }

    public function status()
    {

        # Vars
        $output = array(
            "installation_status" => ""
        );

        return response()->json($output);

    }

    public function stepOne(){

        echo "<pre>
        You need to install it first";

    }

}