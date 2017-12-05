<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appname', function (Blueprint $table) {
            $table->increments('id_app_name');
            $table->string('app_name');
            $table->string('app_description');
            $table->string('app_location');
            $table->string('app_email');
            $table->string('app_phone');
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
        Schema::dropIfExists('appname');
    }
}
