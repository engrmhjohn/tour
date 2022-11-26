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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('f_client_name');
            $table->string('f_client_location');
            $table->longText('f_client_feedback');
            $table->string('s_client_name');
            $table->string('s_client_location');
            $table->longText('s_client_feedback');
            $table->string('t_client_name');
            $table->string('t_client_location');
            $table->longText('t_client_feedback');
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
        Schema::dropIfExists('clients');
    }
};
