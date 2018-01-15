<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactLensTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up () {
        Schema::create('contact_lens', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('practice_id')->unsigned();
            $table->foreign('practice_id')->references('id')->on('practices');

            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->string('title');
            $table->string('duration');
            $table->string('quantity');
            $table->integer('price');
            $table->integer('cost_excl_postage');
            $table->integer('percentage_profit');
            $table->text('notes');
            $table->text('solutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down () {
        Schema::dropIfExists('contact_lens');
    }
}
