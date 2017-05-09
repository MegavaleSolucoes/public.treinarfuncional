<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu_list01');
            $table->string('menu_list02');
            $table->string('menu_list03');
            $table->string('menu_list04');
            $table->string('menu_list05');
            $table->string('menu_list06');
            $table->string('menu_list07');
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
        Schema::drop('menuses');
    }
}
