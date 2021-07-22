<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStadiumIdToClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clubs', function (Blueprint $table) {
            $table->unsignedBigInteger('stadium_id');
            $table->foreign('stadium_id')->references('id')->on('stadium')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clubs', function (Blueprint $table) {
            $table->dropConstrainedForeignId();
        });
    }
}
