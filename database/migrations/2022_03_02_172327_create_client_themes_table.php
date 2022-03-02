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
        Schema::create('client_themes', function (Blueprint $table) {
            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('theme_id')->unsigned();

            $table->index('client_id', 'client_theme_client_idx');
            $table->index('theme_id', 'client_theme_theme_idx');

            $table->foreign('client_id', 'client_theme_client_fk')->on('clients')->references('id');
            $table->foreign('theme_id', 'client_theme_theme_fk')->on('themes')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_themes');
    }
};
