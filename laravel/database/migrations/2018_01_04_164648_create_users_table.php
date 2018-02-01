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
            $table->increments('id');
            $table->string('name');
            $table->string('student_id');
            $table->string('password');
            $table->string('contact_number');
            $table->string('birthday')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('year')->nullable();
            $table->string('address')->nullable();
            $table->string('api_token', 60)->unique()->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('hasvoted')->default(false);
            $table->integer('course_id')->unsigned()->nullable();
            $table->foreign('course_id')->references('id')->on('courses');
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
