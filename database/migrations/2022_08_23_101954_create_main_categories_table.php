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
        //    $table->integer('id');
            $table->string('translation_lang')->nullable(false);
            $table->integer('translation_of')->unsigned()->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('slug')->default(null);
            $table->string('photo')->default(null);
            $table->tinyInteger('active')->nullable(false);//COMMENT '0 => inactive 1=> active',

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
