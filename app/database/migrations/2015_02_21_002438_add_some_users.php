<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeUsers extends Migration {

	
	public function up()
	{
		/*
		User::create(array(
		'username' => 'jorge',
		'password' => Hash::make('password'),
		
		));
*/

		User::create(array(
		'email' => 'jonathan@gmail.com',
		'password' => Hash::make('password'),
		'name' => 'jonathan',
		));


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
