<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use App\Entity\User;

class RegistrationController extends AbstractController

{

    /**
     * @Route("/register", name="register")
     * @param Requestrequest
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $form = $this->createFormbuilder()
    	->add('first_name', TextType::class )
        ->add('last_name', TextType::class )
        ->add('email', TextType::class )
        ->add('username', TextType::class )
    	->add('password', RepeatedType::class, [
    		'type' => PasswordType::class,
    		'required' => true,
    		'first_options'  => ['label' => 'Password'],
    		'second_options' => ['label' => 'Confirm Password']
    	])

    	->add('sign_up', SubmitType::class, [
    		'attr' => [
    			'class' => "#ffa726 orange lighten-1"
    		]
    	])

    	->getForm();

    	$form->handleRequest($request);

    	if ($form->isSubmitted()) {
    		$data = $form->getData();

    		$user = new User();
    		$user->setUsername($data['username']);
    		$user->setPassword($passwordEncoder->encodePassword($user, $data['password']));

    		$em = $this->getDoctrine()->getManager();

    		$em->persist($user);
    
    		$em->flush();

    		return $this->redirect($this->generateUrl('app_login'));
    	}


        return $this->render('registration/index.html.twig', [
        	'form' => $form->createView()
        ]);
    }


}
