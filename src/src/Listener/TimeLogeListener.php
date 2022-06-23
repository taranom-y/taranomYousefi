<?php
namespace App\Listener;
use Doctrine\ORM\Event\LifecycleEventArgs;

class TimeLogeListener
{
    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        // if this listener only applies to certain entity types,
        // add some code to check the entity type as early as possible
        if (!$entity instanceof TimeLogeListener) {
            $entity->setCreatedAt(new \DateTimeImmutable());
            $entity->setUpdatedAt(new \DateTimeImmutable());
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