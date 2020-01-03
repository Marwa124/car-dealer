<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarTypesTable extends Migration {

	public function up()
	{
		Schema::create('car_types', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('car_types');
	}
}