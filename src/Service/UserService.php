<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserService
{
    private $userRepository;
    private $encoder;

    public function __construct(UserRepository $userRepository, UserPasswordHasherInterface $encoder) {
        $this->userRepository = $userRepository;
        $this->encoder = $encoder;
    }

    public function register (User $user, $form) {
        if($form->isSubmitted()) {
            $user->setRole('ROLE_USER');
            
            $user->setCreatedAt(new \DateTime());
            
            $user->setPassword($this->encoder->hashPassword($user, $user->getPassword()));
            
            $this->userRepository->add($user, true);
        }
    }
}