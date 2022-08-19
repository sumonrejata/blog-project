<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_courses', function (Blueprint $table) {
            $table->id();
            $table->string('admission')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('cradit')->nullable();
            $table->string('duration')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('our_courses');
    }
}
