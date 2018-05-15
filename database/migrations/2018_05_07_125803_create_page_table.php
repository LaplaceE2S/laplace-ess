<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageTable extends Migration {

	public function up()
	{
		Schema::create('page', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->integer('categorie')->unsigned();
			$table->longText('content');
		});
	}

	public function down()
	{
		Schema::drop('page');
	}
}