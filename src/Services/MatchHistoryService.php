<?php

namespace App\Services;

use App\Entity\MatchHistory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Response;


class MatchHistoryService implements MatchHistoryServiceInterface
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createNewMatch(): void
    {
        // TODO: Implement createNewMatch() method.
    }
}
