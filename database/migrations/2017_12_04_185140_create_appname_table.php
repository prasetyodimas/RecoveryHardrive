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
            $table->string('app_name',100);
            $table->string('app_description',200);
            $table->string('app_location',100);
            $table->string('app_email',50);
            $table->string('app_phone',20);
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
