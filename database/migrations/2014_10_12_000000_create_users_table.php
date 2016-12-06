<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');  # required by Laravel
            $table->string('name');  # provided by Laravel out of the box, but not required
            $table->string('first_name')->nullable();  # custom added field
            $table->string('last_name')->nullable();  # custom added field
            $table->string('email')->unique();  # required by Laravel
            $table->string('username')->nullable();  # custom added field
            $table->string('password');  # required by Laravel
            $table->rememberToken();  # required by Laravel
            $table->timestamps();  # required by Laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
