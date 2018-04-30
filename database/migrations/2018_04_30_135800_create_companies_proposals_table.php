<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesProposalsTable extends Migration {

	public function up()
	{
		Schema::create('companies_proposals', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->date('creation');
			$table->date('match');
			$table->date('confirmation');
			$table->integer('companies_id')->unsigned();
			$table->integer('proposals_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('companies_proposals');
	}
}