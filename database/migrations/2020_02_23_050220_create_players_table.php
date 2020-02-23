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
        $prefix = "player_";

        Schema::create('players', function (Blueprint $table) use ($prefix) {
            $table->bigIncrements('id');
            $table->string("{$prefix}chance_of_playing_next_round")->nullable();
            $table->string("{$prefix}chance_of_playing_this_round")->nullable();
            $table->string("{$prefix}code")->nullable();
            $table->string("{$prefix}cost_change_event")->nullable();
            $table->string("{$prefix}cost_change_event_fall")->nullable();
            $table->string("{$prefix}cost_change_start")->nullable();
            $table->string("{$prefix}cost_change_start_fall")->nullable();
            $table->string("{$prefix}dreamteam_count")->nullable();
            $table->string("{$prefix}element_type")->nullable();
            $table->string("{$prefix}ep_next")->nullable();
            $table->string("{$prefix}ep_this")->nullable();
            $table->string("{$prefix}event_points")->nullable();
            $table->string("{$prefix}first_name")->nullable();
            $table->string("{$prefix}form")->nullable();
            $table->string("{$prefix}id")->nullable();
            $table->boolean("{$prefix}in_dreamteam")->nullable();
            $table->string("{$prefix}news")->nullable();
            $table->string("{$prefix}news_added")->nullable();
            $table->string("{$prefix}now_cost")->nullable();
            $table->string("{$prefix}photo")->nullable();
            $table->string("{$prefix}points_per_game")->nullable();
            $table->string("{$prefix}second_name")->nullable();
            $table->string("{$prefix}selected_by_percent")->nullable();
            $table->boolean("{$prefix}special")->nullable();
            $table->string("{$prefix}squad_number")->nullable();
            $table->string("{$prefix}status")->nullable();
            $table->string("{$prefix}team")->nullable();
            $table->string("{$prefix}team_code")->nullable();
            $table->string("{$prefix}total_points")->nullable();
            $table->string("{$prefix}transfers_in")->nullable();
            $table->string("{$prefix}transfers_in_event")->nullable();
            $table->string("{$prefix}transfers_out")->nullable();
            $table->string("{$prefix}transfers_out_event")->nullable();
            $table->string("{$prefix}value_form")->nullable();
            $table->string("{$prefix}value_season")->nullable();
            $table->string("{$prefix}web_name")->nullable();
            $table->string("{$prefix}minutes")->nullable();
            $table->string("{$prefix}goals_scored")->nullable();
            $table->string("{$prefix}assists")->nullable();
            $table->string("{$prefix}clean_sheets")->nullable();
            $table->string("{$prefix}goals_conceded")->nullable();
            $table->string("{$prefix}own_goals")->nullable();
            $table->string("{$prefix}penalties_saved")->nullable();
            $table->string("{$prefix}penalties_missed")->nullable();
            $table->string("{$prefix}yellow_cards")->nullable();
            $table->string("{$prefix}red_cards")->nullable();
            $table->string("{$prefix}saves")->nullable();
            $table->string("{$prefix}bonus")->nullable();
            $table->string("{$prefix}bps")->nullable();
            $table->string("{$prefix}influence")->nullable();
            $table->string("{$prefix}creativity")->nullable();
            $table->string("{$prefix}threat")->nullable();
            $table->string("{$prefix}ict_index")->nullable();
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
