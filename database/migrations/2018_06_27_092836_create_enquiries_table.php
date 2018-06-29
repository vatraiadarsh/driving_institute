<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('dob');
            $table->string('email');
            $table->text('cont_no');
            $table->string('timing');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')
            ->on('courses');
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
        Schema::dropIfExists('enquiries');
    }
}
