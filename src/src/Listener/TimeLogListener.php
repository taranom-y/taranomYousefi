<?php

namespace App\Listener;

use App\Entity\User;

class TimeLogListener
{
    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        // if this listener only applies to certain entity types,
        // add some code to check the entity type as early as possible
        if (!$entity instanceof TimeLogListener) {
            $entity->setCreatedAt(new\DateTime());
            $entity->setUpdatedAt(new\DateTime());
        }

    }
    public function preUpdated(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        // if this listener only applies to certain entity types,
        // add some code to check the entity type as early as possible
        if (!$entity instanceof TimeLogListener) {
            $entity->setUpdatedAt(new\DateTime());
        }

    }
}