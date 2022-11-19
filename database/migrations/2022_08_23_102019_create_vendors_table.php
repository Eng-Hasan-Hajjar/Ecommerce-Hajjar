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

            $table->string('name')->nullable(false);
            $table->string('logo')->nullable(false);
            $table->string('mobile')->nullable(false);

            //  `address` text NOT NULL,
            $table->string('address')->nullable(false);
            //  `email` varchar(100) DEFAULT NULL,
            $table->string('email')->default(null);
            // `active` tinyint(1) NOT NULL DEFAULT '0',
            $table->tinyInteger('active')->nullable(false);//COMMENT '0 => inactive 1=> active',
            //    `category_id` int(11) NOT NULL,
            $table->integer('category_id')->nullable(false);


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
        Schema::dropIfExists('vendors');
    }
}
