<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseelementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseelements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('themeid');
            $table->integer('elementid');
            $table->integer('elementinitid')->comment('Element_TableName_ID');
            //$table->string('name');
            //$table->string('summary');
            $table->integer('grade');
            $table->integer('order');
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
        Schema::dropIfExists('courseelements');
    }
}
