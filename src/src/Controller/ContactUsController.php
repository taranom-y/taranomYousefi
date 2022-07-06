<?php

namespace App\Controller;

use App\Form\WriteMessage;
use Doctrine\DBAL\Types\TextType;
use http\Env\Request;
use http\Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactUsController extends AbstractController
{
    #[Route('/contact', name: 'app_contact_us')]
    public function index(Request $request): Response
    {
        $message=new Message();

        $form=$this->createForm(WriteMessage::class,$message);

            $form->handleRequest($request);// read data from user,convert request to object
             if($form->isSubmitted() && $form->isValid()){
                $em=$this->getDoctrine()->getManeger();
                $em->persist($message);
                $em->flush();

                 return $this->redirectToRoute('show_messages/showMessage.html.twig');
             }
        return $this->render('contact_us/contactUs.html.twig', [
            'form' => $form->createView(),'errors'=>$form->getErrors()
        ]);
    }
}
