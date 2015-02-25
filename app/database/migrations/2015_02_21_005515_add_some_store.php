<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeStore extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Stores::create(array(
		
			'name' => 'NY store',
			'address'=> 'time square',
			'city'=> 'New York',
			'zip'=> '10032',
			'country'=> 'usa',
			'latitude'=> '40.6700',
			'longitude' => '73.9400',
			'support_phone'=> '9459856',
			'support_email'=> 'jonathan@gmail.com',
			'user_id' => '1',

		));
*/
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
