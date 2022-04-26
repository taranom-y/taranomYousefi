<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class AboutController extends AbstractController
{

    /**
     * @Route (path="App\Controller\AboutController::about")
     * @return Response
     * @throws \Exception
     */
    public function about(): Response
    {
        $about = random_int(0, 100);


        return $this->render('about/about.html.twig',[
            'about'=>$about,
        ]);

    }
}