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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('bkash_number');
            $table->text('bkash_pic');
            $table->string('nagad_number');
            $table->text('nagad_pic');
            $table->string('rocket_number');
            $table->text('rocket_pic');
            $table->string('bank_acc_number');
            $table->text('bank_acc_pic');
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
        Schema::dropIfExists('payments');
    }
};
