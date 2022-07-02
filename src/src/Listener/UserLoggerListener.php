<?php

namespace App\Listener;

use App\Model\UserLoggerInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;

class UserLoggerListener
{
    private  $tokenStorage;

    public function  __constructor(TokenStorageInterface $tokenStorage){
        $this-> tokenStorage= $tokenStorage;
    }


    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        if (!$entity instanceof UserLoggerInterface) {
            return;
        }
        $token = $this ->tokenStorage->getToken();
        $user =$token==null ? null:$this->tokenStorage->getToken()->getUser();

            $entity->setCreatedUser($user);
            $entity->setUpdatedUser($user);



    }
    public function preUpdate(PreUpdateEventArgs $args): void
    {
        $entity = $args->getObject();


        if (!$entity instanceof UserLoggerInterface) {
            return;
        }
        $token = $this ->tokenStorage->getToken();
        $user =$token==null ? null:$this->tokenStorage->getToken()->getUser();

        $entity->setUpdatedUser($user);

    }

}