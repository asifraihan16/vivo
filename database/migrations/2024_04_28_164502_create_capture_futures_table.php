<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaptureFuturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capture_futures', function (Blueprint $table) {
         
            $table->increments('id');
            $table->string('title');
            $table->string('image_path');
            $table->string('image_link')->nullable();
            $table->string('description')->nullable();
            $table->unsignedTinyInteger('image_order')->default(1);
            $table->unsignedTinyInteger('image_span_col')->default(3)->comment('No of column for image span');
            $table->boolean('is_active')->default(true);
            $table->string('year')->nullable(1);
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
        Schema::dropIfExists('capture_futures');
    }
}
