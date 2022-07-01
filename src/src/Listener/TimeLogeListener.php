<?php
namespace App\Listener;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use App\Model\TimeLoggerInterface;
class TimeLogeListener
{

    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        if (!$entity instanceof TimeLoggerInterface) {
           return;
        }
        $entity->setCreatedAt(new \DateTimeImmutable());
        $entity->setUpdatedAt(new \DateTimeImmutable());

    }
    public function preUpdate(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();


        if (!$entity instanceof TimeLoggerInterface) {
           return;
        }
        $entity->setUpdatedAt(new \DateTimeImmutable());

    }
}