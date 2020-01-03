<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarLuxuryTable extends Migration {

	public function up()
	{
		Schema::create('car_luxury', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('car_id')->unsigned();
			$table->integer('luxury_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('car_luxury');
	}
}