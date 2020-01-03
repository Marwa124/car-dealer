<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('trend_id')->references('id')->on('trends')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('car_type_id')->references('id')->on('car_types')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('manufacture_year_id')->references('id')->on('manufacture_years')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('exhibition_id')->references('id')->on('exhibitions')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('car_luxury', function(Blueprint $table) {
			$table->foreign('car_id')->references('id')->on('cars')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('car_luxury', function(Blueprint $table) {
			$table->foreign('luxury_id')->references('id')->on('luxuries')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('trends', function(Blueprint $table) {
			$table->foreign('brand_id')->references('id')->on('brands')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_trend_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_car_type_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_manufacture_year_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_exhibition_id_foreign');
		});
		Schema::table('car_luxury', function(Blueprint $table) {
			$table->dropForeign('car_luxury_car_id_foreign');
		});
		Schema::table('car_luxury', function(Blueprint $table) {
			$table->dropForeign('car_luxury_luxury_id_foreign');
		});
		Schema::table('trends', function(Blueprint $table) {
			$table->dropForeign('trends_brand_id_foreign');
		});
	}
}