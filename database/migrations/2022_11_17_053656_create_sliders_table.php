<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('f_slider_title');
            $table->string('f_slider_description');
            $table->text('f_slider_pic');
            $table->string('s_slider_title');
            $table->string('s_slider_description');
            $table->text('s_slider_pic');
            $table->string('t_slider_title');
            $table->string('t_slider_description');
            $table->text('t_slider_pic');
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
        Schema::dropIfExists('sliders');
    }
};
