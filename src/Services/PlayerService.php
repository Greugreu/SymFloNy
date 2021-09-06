<?php

namespace App\Services;

use App\Entity\Player;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Response;


class PlayerService implements PlayerServiceInterface
{
    public function __construct(EntityManagerInterface $entityManager,
                                HttpClientInterface $client)
    {
        $this->entityManager = $entityManager;
        $this->HttpClient = $client;
    }

    public function createNewPlayer(array $players)
    {
        $response = new Response();
        $i = 0;
        try {
            foreach ($players as $player)
            {
                $newPlayer = new Player();
                $newPlayer->setUsername($player['username']);
                $newPlayer->setLane($player['lane']);
                $newPlayer->setGameId($player['gameId']);
                $this->entityManager->persist($newPlayer);
                $i++;
            }

            $this->entityManager->flush();

            return $response->setStatusCode(Response::HTTP_OK, 'SUCCESS: ' . $i . 'new players created');
        }
        catch (\Exception $e)
        {
            return $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }
}
