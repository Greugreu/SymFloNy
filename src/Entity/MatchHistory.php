<?php

namespace App\Entity;

use App\Repository\MatchHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MatchHistoryRepository::class)
 */
class MatchHistory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $platformId;

    /**
     * @ORM\Column(type="integer")
     */
    private $gameId;

    /**
     * @ORM\Column(type="integer")
     */
    private $champion;

    /**
     * @ORM\Column(type="integer")
     */
    private $queue;

    /**
     * @ORM\Column(type="integer")
     */
    private $season;

    /**
     * @ORM\Column(type="integer")
     */
    private $timestamp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lane;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlatformId(): ?string
    {
        return $this->platformId;
    }

    public function setPlatformId(string $platformId): self
    {
        $this->platformId = $platformId;

        return $this;
    }

    public function getGameId(): ?int
    {
        return $this->gameId;
    }

    public function setGameId(int $gameId): self
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getChampion(): ?int
    {
        return $this->champion;
    }

    public function setChampion(int $champion): self
    {
        $this->champion = $champion;

        return $this;
    }

    public function getQueue(): ?int
    {
        return $this->queue;
    }

    public function setQueue(int $queue): self
    {
        $this->queue = $queue;

        return $this;
    }

    public function getSeason(): ?int
    {
        return $this->season;
    }

    public function setSeason(int $season): self
    {
        $this->season = $season;

        return $this;
    }

    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    public function setTimestamp(int $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getLane(): ?string
    {
        return $this->lane;
    }

    public function setLane(string $lane): self
    {
        $this->lane = $lane;

        return $this;
    }
}
