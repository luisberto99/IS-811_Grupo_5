<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advert_complaints', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('message');
            $table->unsignedBigInteger('accuser');
            $table->foreign('accuser')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('advert_id');
            $table->foreign('advert_id')->references('id')->on('adverts')->onDelete('cascade');
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
        Schema::dropIfExists('advert_complaints');
    }
}
