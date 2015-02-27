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
		
		Stores::create(array(
		/*
			'name' => 'NY store',
			'address'=> 'time square',
			'city'=> 'New York',
			'zip'=> '10032',
			'state'=> 'otro',
			'country'=> 'usa',
			'lat'=> '40.6700',
			'lng' => '73.9400',
			'support_phone'=> '9459856',
			'support_email'=> 'jonathan@gmail.com',
			'user_id' => 1,
*/
//'id'=>'1',
'name'=>'Jonathan Conde',
'lat'=>'44.947464',
'lng'=>'-93.320826',
'address'=>'tienda',
'address2'=>'',
'city'=>'Minneapolis',
'state'=>'MN',
'postal'=>'55416',
'phone'=>'612-922-6662',
'web'=>'http=>\/\/www.chipotle.com',
'hours1'=>'Mon-Sun 11am-10pm',
'hours2'=>'',
'hours3'=>''


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
