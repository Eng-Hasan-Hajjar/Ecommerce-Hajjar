<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_categories', function (Blueprint $table) {
            $table->id();
            $table->string('translation_lang',10)->nullable(false);
            $table->integer('translation_of',10)->unsigned()->nullable(false);
            $table->string('name',150)->nullable(false);
            $table->string('slug',150)->default(null);
            $table->string('photo',150)->default(null);
            $table->tinyInteger('active',1)->default(1)->nullable(false);//COMMENT '0 => inactive 1=> active',

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
        Schema::dropIfExists('main_categories');
    }
}
