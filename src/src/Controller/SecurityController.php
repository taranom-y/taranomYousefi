<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController {

    #[Route('/logout', name: 'app_logout', methods: ["GET"])]
    public function logout(): void {
        // controller can be blank: it will never be called!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }

    #[Route('/users', name: 'app_users', methods: ["GET"])]
    public function users(UserRepository $userRepository): Response {
        $users = $userRepository->findAll();

        return $this->render('security/users.html.twig', [
            'users' => $users,
        ]);
    }
}