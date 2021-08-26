<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorrectAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CorrectAnswerTable', function (Blueprint $table) {
            $table->id();
            $table->string('answer');
            $table->unsignedBigInteger('questionId');
             $table->foreign('questionId')->references('id')->on('questions')->onUpdate('cascade')->onDelete('cascade');          
             //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
