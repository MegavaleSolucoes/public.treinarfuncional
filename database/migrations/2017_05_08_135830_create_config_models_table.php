<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_models', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('config_title', 50);
            $table->string('config_footer', 200);
            $table->string('config_descript', 200);
            $table->string('config_key', 200);
            $table->string('config_name', 200);
            $table->string('config_auth', 100);
            $table->string('config_contact', 200);
            $table->string('config_email', 100);
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
        Schema::drop('config_models');
    }
}
