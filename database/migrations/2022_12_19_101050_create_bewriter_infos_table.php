<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBewriterInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bewriter_infos', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('dob');
            $table->string('phone');
            $table->string('country');
            $table->string('cv');
            $table->enum('status', ['1', '0'])->default('0');
            $table->text('comments')->nullable();
            $table->enum('exam', ['1', '0'])->default('0');
            $table->text('answer')->nullable();
            $table->string('time')->nullable();
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
        Schema::dropIfExists('bewriter_infos');
    }
}
