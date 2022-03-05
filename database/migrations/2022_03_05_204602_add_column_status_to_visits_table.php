<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const IN_PROGRESS_STATUS = 1;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->unsignedInteger('status')
                ->default(self::IN_PROGRESS_STATUS)
                ->nullable()
                ->after('location')
                ->comment('1: In progress. 2: Completed');
            $table->dropUnique('visits_phone_full_name_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->unique(['phone', 'full_name']);
        });
    }
};
