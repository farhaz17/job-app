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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('address_one')->nullable();
            $table->text('address_two')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('postal')->nullable();
            $table->text('country')->nullable();
            $table->text('area_code')->nullable();
            $table->text('phone')->nullable();
            $table->text('designation')->nullable();
            $table->date('start_date')->nullable();
            $table->text('resume')->nullable();
            $table->rememberToken();
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
