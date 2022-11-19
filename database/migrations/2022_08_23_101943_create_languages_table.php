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
          //  $table->integer('id');
            $table->string('abbr',10)->nullable(true);
            $table->string('locale',200)->default(null);
            $table->string('name',100)->nullable(true);
            $table->enum('direction', ['ltr', 'rtl'])->default('rtl')->nullable(true);
            $table->tinyInteger('active',1)->nullable(true);

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
