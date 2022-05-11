<?php

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoomRepository::class)]
class Room
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $number;

    #[ORM\Column(type: 'string', length: 255)]
    private $empty;

    #[ORM\Column(type: 'integer')]
    private $numberOfBeds;

    #[ORM\ManyToOne(targetEntity: Hotel::class, inversedBy: 'rooms')]
    #[ORM\JoinColumn(nullable: false)]
    private $hotel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getEmpty(): ?string
    {
        return $this->empty;
    }

    public function setEmpty(string $empty): self
    {
        $this->empty = $empty;

        return $this;
    }

    public function getNumberOfBeds(): ?int
    {
        return $this->numberOfBeds;
    }

    public function setNumberOfBeds(int $numberOfBeds): self
    {
        $this->numberOfBeds = $numberOfBeds;

        return $this;
    }

    public function getHotel(): ?Hotel
    {
        return $this->hotel;
    }

    public function setHotel(?Hotel $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }
}
