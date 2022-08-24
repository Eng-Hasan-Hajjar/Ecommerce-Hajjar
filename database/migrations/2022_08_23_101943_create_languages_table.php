<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('abbr',10)->nullable(false);
            $table->string('locale',200)->default(null); 
            $table->string('name',100)->nullable(false);
            $table->enum('direction', ['ltr', 'rtl'])->default('rtl')->nullable(false);
            $table->tinyInteger('active',1)->default(1)->nullable(false);

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
        Schema::dropIfExists('languages');
    }
}
