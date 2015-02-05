<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userdata extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userdatas', function($t) {
                $t->increments('id');
                $t->string('username', 16);
                $t->string('email', 64);
                $t->string('address', 640);
                $t->string('phone', 64);
                $t->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userdatas');
	}

}
