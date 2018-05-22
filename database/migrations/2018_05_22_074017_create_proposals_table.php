<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProposalsTable extends Migration {

	public function up()
	{
		Schema::create('proposals', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('type');
			$table->string('description');
			$table->integer('companies_id')->unsigned();
			$table->string('frequence');
			$table->date('heure');
			$table->date('debut');
			$table->date('fin');
			$table->integer('skills_id')->unsigned();
			$table->integer('is_valid');
			$table->date('expiration');
			$table->integer('cout_horaire');
			$table->string('mois');
			$table->integer('cout_total');
			$table->string('lieu');
		});
	}

	public function down()
	{
		Schema::drop('proposals');
	}
}