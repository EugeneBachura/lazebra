<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelsFramesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models_frames', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('url');
            $table->bigInteger('brand_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('name');
            $table->string('img')->nullable();
            $table->json('options');
            $table->string('h1')->nullable();
            $table->string('subtitle')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_models_frames');
    }
}
