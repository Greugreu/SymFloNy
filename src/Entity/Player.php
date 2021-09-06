<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlayerRepository::class)
 */
class Player
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
    private $username;

    /**
     * @ORM\Column(type="integer")
     */
    private $gameId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lane;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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
