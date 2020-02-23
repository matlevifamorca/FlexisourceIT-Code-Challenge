<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Player;

class ImportPlayers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:players';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $apiUrl = "https://fantasy.premierleague.com/api/bootstrap-static/";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {

            $this->error("Error: {$err}");

        } else {

            $response = json_decode($response);

            $players = $response->elements;

            $totalPlayerCreated = 0;

            $prefix = "player_";

            foreach($players as $playerFields) {

                $player = [];
                foreach ($playerFields as $col => $val) {
                    
                    $player["{$prefix}{$col}"] = $val;

                }

                $registerPlayer = Player::updateOrCreate(["{$prefix}id" => $player["{$prefix}id"]], $player);

                if($registerPlayer->wasRecentlyCreated) {
                    $totalPlayerCreated++;
                }

            }

            $this->info("Total Player Created: {$totalPlayerCreated}");
            
        }
        
    }
}
