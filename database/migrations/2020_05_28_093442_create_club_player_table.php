<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubPlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_player', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id') /* ->index() */;
            $table->unsignedBigInteger('player_id') /* ->index() */;
            $table->date('started_on');
            $table->date('ended_on')->nullable();
            $table->timestamps();

            $table->unique(['club_id','player_id']);

            $table->foreign('club_id')
                ->references('id')->on('clubs')
                ->onDelete('cascade');
            $table->foreign('player_id')
                ->references('id')->on('players')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_club');
    }
}
