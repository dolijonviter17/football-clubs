<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->string('photo');
            $table->string('height');
            $table->enum('position', ['GK', 'CB', 'LB', 'RB', 'DMF', 'RM', 'LW', 'ST', 'RW']);
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
        Schema::dropIfExists('players');
    }
}
