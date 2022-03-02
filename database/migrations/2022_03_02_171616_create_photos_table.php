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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('url');
            $table->string('size');
            $table->string('desc');
            $table->unsignedBigInteger('theme_id')->nullable();
            $table->timestamps();

            $table->index('theme_id', 'photo_theme_idx');
            $table->foreign('theme_id', 'photo_theme_fk')
                ->on('themes')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
};
