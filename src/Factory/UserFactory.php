<?php


namespace App\Factory;


//use App\Entity\User;
//use App\Services\EmailSender;
//use App\Services\PasswordHasher;

use App\Email\EmailSender;
use App\Entity\User;
use App\Password\PasswordHasher;

class UserFactory
{

    public function createUser(
        string $username,
        string $password,
        string $email
    ): User
    {

        // Création d'un utilisateur
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);

        // instanciation avec new, donc en PHP vanilla
        // si avec symfony, on peut utiliser l'injection de dépendances
        $passwordHasher = new PasswordHasher();
        $hashedPassword = $passwordHasher->hashPassword($password);

        $user->setPassword($hashedPassword);

        // instanciation avec new, donc en PHP vanilla
        // si avec symfony, on peut utiliser l'injection de dépendances
        $emailSender = new EmailSender();
        $emailSender->sendEmail($email, 'Création de compte');

        return $user;
    }

}
