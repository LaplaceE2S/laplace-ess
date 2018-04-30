<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('users_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sub_skills', function(Blueprint $table) {
			$table->foreign('skills_id')->references('id')->on('skills')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('proposals', function(Blueprint $table) {
			$table->foreign('companies_id')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('proposals', function(Blueprint $table) {
			$table->foreign('skills_id')->references('id')->on('skills')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('companies_proposals', function(Blueprint $table) {
			$table->foreign('companies_id')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('companies_proposals', function(Blueprint $table) {
			$table->foreign('proposals_id')->references('id')->on('proposals')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('companies_skills', function(Blueprint $table) {
			$table->foreign('companies_id')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('companies_skills', function(Blueprint $table) {
			$table->foreign('skills_id')->references('id')->on('skills')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('companies_users_id_foreign');
		});
		Schema::table('sub_skills', function(Blueprint $table) {
			$table->dropForeign('sub_skills_skills_id_foreign');
		});
		Schema::table('proposals', function(Blueprint $table) {
			$table->dropForeign('proposals_companies_id_foreign');
		});
		Schema::table('proposals', function(Blueprint $table) {
			$table->dropForeign('proposals_skills_id_foreign');
		});
		Schema::table('companies_proposals', function(Blueprint $table) {
			$table->dropForeign('companies_proposals_companies_id_foreign');
		});
		Schema::table('companies_proposals', function(Blueprint $table) {
			$table->dropForeign('companies_proposals_proposals_id_foreign');
		});
		Schema::table('companies_skills', function(Blueprint $table) {
			$table->dropForeign('companies_skills_companies_id_foreign');
		});
		Schema::table('companies_skills', function(Blueprint $table) {
			$table->dropForeign('companies_skills_skills_id_foreign');
		});
	}
}