<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc');
            $table->integer('fees');
            $table->integer('duration');
            $table->integer('duration_type_id')->unsigned();
            $table->foreign('duration_type_id')->references('id')
            ->on('duration_types');
            //duration_type_id la duration_types table ko id la reference garirako xa
            $table->string('shift');
            $table->boolean('status');
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
        Schema::dropIfExists('courses');
    }
}
