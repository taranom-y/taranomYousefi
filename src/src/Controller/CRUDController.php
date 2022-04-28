<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CRUDController extends  AbstractController
{
    /**
     * @Route (path="")
     * @return Response
     * @throws \Exception
     */
    public function index(): Response
    {
        $index = random_int(0, 100);

        return $this->render('home/index.html.twig',[
            'index'=>$index,
        ]);
    }
}