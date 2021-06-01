<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->nullable()->default('client');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('NIP')->nullable()->unique();
            $table->string('tel_nr')->unique();
            $table->string('street');
            $table->string('building_nr');
            $table->string('apart_nr');
            $table->string('mail');
            $table->string('mail_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
