<?php

namespace App\Hotel;

use App\Entity\Hotel;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use http\Exception\InvalidArgumentException;

class SearchService {

    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    public function __construct(
        EntityManagerInterface $entityManager
    ) {

        $this->entityManager = $entityManager;
    }

    /**
     * @param $hotelNameQuery
     *
     * @return Hotel[]
     */
    public function search($hotelNameQuery): array {

        /** @var \App\Repository\HotelRepository $hotelRepository */

        $hotelRepository = $this->entityManager->getRepository(Hotel::class);
        return $hotelRepository->searchByName($hotelNameQuery);
    }
    public  function makeSearchParameter(?string $parameter): string
    {
        if($parameter === null){
            throw  new InvalidArgumentException("parameter cant be null ");
        }
      return "%parameter%";
    }
}