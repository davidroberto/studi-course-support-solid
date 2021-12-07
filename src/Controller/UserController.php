<?php


namespace App\Controller;


use App\Factory\UserFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{

    /**
     * @Route("/user/create", name="user_create")
     */
    public function registerUser(UserFactory $userFactory): Response
    {
        // récupération des données POST du form

        $username = "davidrobert";
        $email = "contact@david-robert.fr";
        $password = "test";

        $userFactory->createUser($username, $email, $password);

        return $this->render('user/register.html.twig');
    }

}
