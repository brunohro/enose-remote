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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->float("percent_mq2", 5, 2)->nullable();
            $table->float("percent_mq3", 5, 2)->nullable();
            $table->float("percent_mq5", 5, 2)->nullable();
            $table->float("percent_mq8", 5, 2)->nullable();
            $table->float("percent_mq135", 5, 2)->nullable();
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
        Schema::dropIfExists('sensors');
    }
};
