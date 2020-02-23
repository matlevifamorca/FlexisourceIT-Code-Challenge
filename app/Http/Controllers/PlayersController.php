<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{

    public function index(){

    	$players = Player::select(['id', 'player_first_name', 'player_second_name'])->get()->map(function($q){

    		$q->setAttribute('full_name', $q->full_name);

    		// Remove unnecessary fields
    		unset($q['player_first_name']);
    		unset($q['player_second_name']);

    		return $q;

    	});

    	return response($players, 200)->header('Content-Type', 'text/json');

    }

    public function show($id){

    	$player = Player::findOrFail($id);
    	return response($player, 200)->header('Content-Type', 'text/json');

    }

}
