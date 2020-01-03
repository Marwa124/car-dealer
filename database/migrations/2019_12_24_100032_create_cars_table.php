<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarsTable extends Migration {

	public function up()
	{
		Schema::create('cars', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('trend_id')->unsigned()->default(1);
			$table->integer('car_type_id')->unsigned()->default(1);
			$table->integer('manufacture_year_id')->unsigned()->default(1);
			$table->string('engine_capacity');
			$table->string('km');
			$table->string('price');
			$table->enum('motion_vector', ['ناقل أوتوماتيك', 'ناقل يدوي']);
			$table->enum('doors_number', ['2 باب', '4 باب']);
			$table->string('car_code')->nullable();
			$table->string('youtube_link')->nullable();
      $table->integer('exhibition_id')->unsigned();
			$table->text('image');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('cars');
	}
}
