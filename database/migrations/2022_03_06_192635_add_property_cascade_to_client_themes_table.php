<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_themes', function (Blueprint $table) {
            $table->dropForeign('client_theme_client_fk');
            $table->dropForeign('client_theme_theme_fk');
            $table->foreign('client_id', 'client_theme_client_fk')->on('clients')->references('id')->onDelete('cascade');
            $table->foreign('theme_id', 'client_theme_theme_fk')->on('themes')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_themes', function (Blueprint $table) {
            $table->dropForeign('client_theme_client_fk');
            $table->dropForeign('client_theme_theme_fk');
            $table->foreign('client_id', 'client_theme_client_fk')->on('clients')->references('d');
            $table->foreign('theme_id', 'client_theme_theme_fk')->on('themes')->references('id');
        });
    }
};
