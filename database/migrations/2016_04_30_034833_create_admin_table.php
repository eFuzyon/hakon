<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use eFuzyon\Tools;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        # Create table
        Schema::Create('hakon_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });

        # Generate password
        $password = eFuzyon\Password::Generate('hakoncms', [
            "public-key" => "hakonCMS"
        ]);

        # Seed Table
        DB::table('hakon_admin')->insert([
            'id' => 1,
            'name' => 'Hakon',
            'email' => 'hakon@efuzyon.com',
            'username' => 'hakoncms',
            'password' => $password
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hakon_admin');
    }
}
