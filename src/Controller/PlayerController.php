<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Services\PlayerServiceInterface;
use App\Services\MatchHistoryServiceInterface;

class PlayerController extends AbstractController
{
    public function __construct(HttpClientInterface $client,
                                EntityManagerInterface $entityManager,
                                PlayerServiceInterface $playerRepos,
                                MatchHistoryServiceInterface $matchHistory)
    {
        $this->client = $client;
        $this->entityManager = $entityManager;
        $this->playerInterface = $playerRepos;
        $this->matchHistoryInterface = $matchHistory;
    }

    /**
     * @Route("/player", name="player")
     */
    public function index(): Response
    {
        return $this->render('player/index.html.twig', [
            'controller_name' => 'PlayerController',
        ]);
    }

    public function getRemotePlayerMatchListByUsername(string $username): Response
    {
        $request = $this->client->request(
            'GET',
            'http://51.255.160.47:8181/euw1/passerelle/getHistoryMatchList/'.$username
        );

        $response = new Response();
        $response->setContent($request);

        return $response;
    }


}
