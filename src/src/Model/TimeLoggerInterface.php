<?php

namespace App\Model;

interface TimeLoggerInterface
{
    public function getCreatedAt(): \DateTimeImmutable;
    public function setCreatedAt(\DateTimeImmutable $createdAt): self;

    public function getUpdatedAt(): \DateTimeImmutable;
    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self;
}