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
        Schema::create('day_tours', function (Blueprint $table) {
            $table->id();
            $table->string('day_tour_title');
            $table->string('day_tour_slug');
            $table->string('day_tour_location');
            $table->string('day_tour_duration');
            $table->string('day_tour_attraction');
            $table->string('day_tour_holiday_special');
            $table->string('day_tour_holiday');
            $table->string('day_tour_description');
            $table->string('day_tour_schedule');
            $table->text('day_tour_image');
            $table->string('day_tour_s_bdt');
            $table->string('day_tour_s_d');
            $table->string('day_tour_d_bdt');
            $table->string('day_tour_d_d');
            $table->string('day_tour_t_bdt');
            $table->string('day_tour_t_d');
            $table->string('day_tour_q_bdt');
            $table->string('day_tour_q_d');
            $table->longText('day_tour_price_inclusion');
            $table->longText('day_tour_ttc');
            $table->tinyInteger('d_status')->default(1);
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
        Schema::dropIfExists('day_tours');
    }
};
