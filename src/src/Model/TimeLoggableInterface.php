<?php

namespace App\Model;
use DateTimeImmutable;

interface TimeLoggableInterface
{
  public function setCreatedAt(DateTimeImmutable $createdAt);

  public  function  setUpdatedAt(DateTimeImmutable $updatedAt);
}