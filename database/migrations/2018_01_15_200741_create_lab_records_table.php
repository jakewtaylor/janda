<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabRecordsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up () {
        Schema::create('lab_records', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->integer('practice_id')->unsigned();
            $table->foreign('practice_id')->references('id')->on('practices');

            $table->integer('lab_id')->unsigned();
            $table->foreign('lab_id')->references('id')->on('labs');

            $table->date('sent_at');
            $table->date('required_at');
            $table->date('received_at');
            $table->string('lens');
            $table->string('order_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down () {
        Schema::dropIfExists('lab_records');
    }
}
