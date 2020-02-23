<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $table = 'players';
    protected $guarded = [];

	public function getFullnameAttribute(){
		return trim($this->player_first_name . ' '. $this->player_second_name);
	}

}