<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b6032258c5f5RelationshipsToGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function(Blueprint $table) {
            if (!Schema::hasColumn('games', 'home_team_id')) {
                $table->integer('home_team_id')->unsigned()->nullable();
                $table->foreign('home_team_id', '190464_5b60322523327')->references('id')->on('teams')->onDelete('cascade');
                }
                if (!Schema::hasColumn('games', 'away_team_id')) {
                $table->integer('away_team_id')->unsigned()->nullable();
                $table->foreign('away_team_id', '190464_5b60322531073')->references('id')->on('teams')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function(Blueprint $table) {
            
        });
    }
}
