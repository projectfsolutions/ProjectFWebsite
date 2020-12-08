<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblservices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FileName');
            $table->string('Title');
            $table->longText('Description');
            $table->integer('Position');
            $table->string('ImgPosition');
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
        Schema::dropIfExists('tblservices');
    }
}
