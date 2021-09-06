<?php

namespace App\Services;

use App\Entity\Player;

class PlayerService implements PlayerServiceInterface
{
    public function createNewPlayer(array $players)
    {
        try {
            foreach ($players as $player)
            {
                $newPlayer = new Player();
                $newPlayer->setUsername($player['username']);
                $newPlayer->setLane($player['lane']);
                $newPlayer->setGameId($player['gameId']);
            }

            return $response = 200;
        }
        catch (\Exception $e)
        {
            return $response = $e;
        }
    }
}
