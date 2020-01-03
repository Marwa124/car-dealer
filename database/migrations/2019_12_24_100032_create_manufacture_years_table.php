<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufactureYearsTable extends Migration {

	public function up()
	{
		Schema::create('manufacture_years', function(Blueprint $table) {
			$table->increments('id');
			$table->string('year')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('manufacture_years');
	}
}