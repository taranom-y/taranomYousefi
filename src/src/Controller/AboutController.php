<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class AboutController extends AbstractController
{

    /**
     * @Route (path="about", name="about")
     * @return Response
     * @throws \Exception
     */
    public function about(): Response
    {
        return $this->render('about/about.html.twig');

    }
}