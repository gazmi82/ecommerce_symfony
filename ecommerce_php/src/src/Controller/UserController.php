<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

  

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user.")
     */
    public function user()
    {
        return $this->render('user/user.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("user/list", name="list")
     */
    public function list()
    {
        return $this->render('list/list.html.twig', [
            'controller_name' => 'UserController',
        ]);    
    }
}