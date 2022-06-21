<?php

namespace App\Hotel;

use Doctrine\ORM\EntityManagerInterface;

class SearchService
{
    private EntityManagerInterface $entityManager;

    public  function  __construct(EntityManagerInterface $entityManager){
        $this->entityManager= $entityManager;
    }

    /**
     * @param $hotelNameQuery
     * @return Hotel[]
     */
    public function  search($hotelNameQuery):array{
        /**@var \App\Repository\HotelRepository $hotelRepository */
       $hotelRepository=$this->entityManager->getRepository(Hotel::class);
       return $hotelRepository->searchByName($hotelNameQuery);

    }
}