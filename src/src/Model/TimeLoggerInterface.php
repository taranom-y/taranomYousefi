<?php

namespace App\Model;
use DateTimeImmutable;

interface TimeLoggerInterface
{
  public function setCreatedAt(DateTimeImmutable $createdAt);

  public  function  setUpdatedAt(DateTimeImmutable $updatedAt);
}