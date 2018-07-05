<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salary');
            $table->integer('bonus')->default(0);
            $table->integer('trainer_id')->unsigned();
            $table->foreign('trainer_id')->references('id')
            ->on('trainers');
            $table->timestamp('created_at')->useCurrent;
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers_payment');
    }
}
