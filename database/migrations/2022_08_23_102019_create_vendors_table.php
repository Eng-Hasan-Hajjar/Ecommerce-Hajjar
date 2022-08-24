<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->nullable(false);
            $table->string('logo',200)->nullable(false);
            $table->integer('translation_of',10)->unsigned()->nullable(false);
            $table->string('name',150)->nullable(false);
            $table->string('slug',150)->default(null);
         
            $table->tinyInteger('active',1)->default(1)->nullable(false);//COMMENT '0 => inactive 1=> active',

            $table->timestamps();
        });
    }
/*
    `mobile` varchar(100) NOT NULL,
    `address` text NOT NULL,
    `email` varchar(100) DEFAULT NULL,
    `category_id` int(11) NOT NULL,
    `active` tinyint(1) NOT NULL DEFAULT '0',
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    */


    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
