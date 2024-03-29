<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsFramesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands_frames', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('title');
            $table->string('h1')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('description');
            $table->string('name');
            $table->string('img')->nullable();
            $table->string('gallery_id')->nullable();
            $table->json('options');
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
        Schema::dropIfExists('brands_frames');
    }
}
