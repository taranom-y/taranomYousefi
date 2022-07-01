<?php

namespace App\Entity;


use App\Model\TimeLoggerInterface;
use App\Model\TimeLoggerTrait;
use App\Repository\RoomRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RoomRepository::class)]
class Room implements TimeLoggerInterface
{
    use TimeLoggerTrait;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    #[Assert\GreaterThanOrEqual(1)]
    private $numOfBeds;

    #[ORM\Column(type: 'boolean')]
    #[Assert\NotNull()]
    private $isEmpty;

    #[ORM\ManyToOne(targetEntity: Hotel::class, inversedBy: 'rooms')]
    #[ORM\JoinColumn(nullable: false)]
    private $hotel;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumOfBeds(): ?int
    {
        return $this->numOfBeds;
    }

    public function setNumOfBeds(int $numOfBeds): self
    {
        $this->numOfBeds = $numOfBeds;

        return $this;
    }

    public function getIsEmpty(): ?bool
    {
        return $this->isEmpty;
    }

    public function setIsEmpty(bool $isEmpty): self
    {
        $this->isEmpty = $isEmpty;

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
