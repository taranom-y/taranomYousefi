<?php

namespace App\Security;

use App\Model\OwnedInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\The;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class OwnerVoter extends Voter
{
    const EDIT ='EDIT';
    const DELETE ='DELETE';


    protected function supports(string $attribute, mixed $subject): bool
    {
         return is_a($subject,OwnedInterface::class);
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user =$token->getUser();

       if($attribute == self::EDIT){
          return true;
       }
       if ($attribute ==self::DELETE){
             return true;
       }

       if (!$user){
          return false;
       }
       return $subject->getOwner() ==$user;
    }
}