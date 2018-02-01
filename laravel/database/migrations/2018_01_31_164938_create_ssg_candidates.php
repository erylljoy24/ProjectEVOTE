<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsgCandidates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ssg_candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('name');
            $table->integer('course_id')->unsigned()->nullable();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->integer('ssg_party_id')->unsigned()->nullable();
            $table->foreign('ssg_party_id')->references('id')->on('ssg_parties');
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
        Schema::dropIfExists('ssg_candidates');
    }
}
