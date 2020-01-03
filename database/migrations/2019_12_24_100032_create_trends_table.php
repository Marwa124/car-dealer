<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrendsTable extends Migration {

	public function up()
	{
		Schema::create('trends', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->nullable();
			$table->integer('brand_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('trends');
	}
}