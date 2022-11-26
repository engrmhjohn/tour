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
        Schema::create('popular_tours', function (Blueprint $table) {
            $table->id();
            $table->string('pt_title');
            $table->string('pt_slug')->unique();

            $table->string('pt_fday_location');
            $table->string('pt_fday_duration');
            $table->string('pt_fday_attraction');
            $table->string('pt_fday_holiday_special');
            $table->string('pt_fday_holiday');
            $table->longText('pt_fday_description');
            $table->longText('pt_fday_schedule');
            $table->text('pt_fday_image');

            $table->string('pt_sday_location');
            $table->string('pt_sday_duration');
            $table->string('pt_sday_attraction');
            $table->string('pt_sday_holiday_special');
            $table->string('pt_sday_holiday');
            $table->longText('pt_sday_description');
            $table->longText('pt_sday_schedule');
            $table->text('pt_sday_image');

            $table->string('pt_tday_location');
            $table->string('pt_tday_duration');
            $table->string('pt_tday_attraction');
            $table->string('pt_tday_holiday_special');
            $table->string('pt_tday_holiday');
            $table->longText('pt_tday_description');
            $table->longText('pt_tday_schedule');
            $table->text('pt_tday_image');

            $table->string('ptsp_bdt');
            $table->string('ptsp_d');
            $table->string('ptdp_bdt');
            $table->string('ptdp_d');
            $table->string('pttp_bdt');
             $table->string('pttp_d');
             $table->string('ptqp_bdt');
             $table->string('ptqp_d');
             $table->string('pt_price_inclusion');
             $table->longText('pt_t2c');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('popular_tours');
    }
};
