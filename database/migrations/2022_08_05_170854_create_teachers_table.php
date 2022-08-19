<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('tea_name')->nullable();
            $table->string('tea_desig')->nullable();
            $table->string('tea_description')->nullable();
            $table->string('tea_image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('fblink')->nullable();
            $table->string('youtube')->nullable();
            $table->string('youlink')->nullable();
            $table->string('twitter')->nullable();
            $table->string('twilink')->nullable();
            $table->string('google')->nullable();
            $table->string('goolink')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
