<?php

namespace App\Listener;
use Doctrine\ORM\Event\LifecycleEventArgs;
use http\Client\Curl\User;

class SetCreatorListener
{
    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        // if this listener only applies to certain entity types,
        // add some code to check the entity type as early as possible
        if (!$entity instanceof TimeLogeListener) {
            $entity->setCreator(get);
        }

    }
    public function preUpdate(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        // if this listener only applies to certain entity types,
        // add some code to check the entity type as early as possible
        if (!$entity instanceof TimeLogeListener) {
            $entity->setUpdatedAt(new \DateTimeImmutable());
        }

    }

}