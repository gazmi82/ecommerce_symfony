<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="home", schemes={"https"})
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     *@Route("/custom/{name?}", name="custom")
     *@param Request $request
     *@return Response
     */

    public function custom(Request $request) {
        $name = $request->get('name');
         
        return $this->render('home/custom.html.twig', [

            'name' => $name
        ]);

    }

    
   // /**
   // *@Route("/user/save")
   // */
   /* public function save(){
      $entityUser = $this->getDoctrine()->getUser;

      $user = new User();
      $user->setId();

      $user->persist($user);

      $entityUser->flush();
      return new Response('Saved a new user with the id of'.$user->getId());
    }*/
  }
