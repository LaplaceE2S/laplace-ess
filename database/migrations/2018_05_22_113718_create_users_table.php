<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('avatar')->default('avatar_utilisateur.png');
            $table->string('email')->unique();
            $table->boolean('type')->default(false);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

	public function down()
	{
		Schema::drop('users');
	}
}