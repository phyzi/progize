<?php

namespace proGize\UserManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use proGize\UserManagementBundle\Form\Type\RegistrationType;
use proGize\UserManagementBundle\Form\Type\LoginType;
use proGize\UserManagementBundle\Entity\User;
use proGize\UserManagementBundle\Entity\UserLogin;
use proGize\UsermanagementBundle\Entity\UserRepository;

class AccountController extends Controller
{
    public function newAction()
    {
    	$registerform = $this->createForm(new RegistrationType(),
    		new User()
    	);

        $loginform = $this->createForm(new LoginType(),
            new UserLogin);

        return $this->render('proGizeUserManagementBundle:Account:Account.html.twig', array(
        	'registerform' => $registerform->createView(),
            'loginform' => $loginform->createview()
        ));
    }

    public function loginAction(Request $request)
    {        
        $user = new Userlogin;

        $loginform = $this->createForm(new LoginType(), $user);

        if ($request->isMethod('POST')) {
            $loginform->bind($request);

            if ($loginform->isValid()) {
                $login = $loginform->getData();

                $username = $this->getDoctrine()
                    ->getRepository('proGizeUserManagementBundle:User')
                    ->findOneBy( array('username' => $login->getUsername()) );

                $password = $this->getDoctrine()
                    ->getRepository('proGizeUserManagementBundle:User')
                    ->findOneBy( array('password' => $login->getPassword()) );

                if (!$username) {
                    throw $this->createNotFoundException('Username '.$login->getUsername().' not found. That sucks.');
                } elseif (!$password) {
                    throw $this->createNotFoundException('Wrong password. That sucks.');
                } else {
                    //logged in
                return $this->redirect($this->generateUrl('progize_user_control_panel'));
                    $session = new Session();
                    $session->start();
                    $session->set('name', $login->getUsername() );
                }
            }

            throw $this->createNotFoundException('Now thats weird. I think you didn\'t fill the form correctly.');
        }

        return $this->render('proGizeWelcomeBundle:Welcome:init.html.twig');
    }

    public function createAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $form = $this->createForm(new RegistrationType(), new User());

        $form->bind($this->getRequest());

        if ($form->isValid()) {
            $registration = $form->getData();

            $em->persist($registration);
            $em->flush();

            return $this->redirect('http://google.de');
        }

        $response = $this->forward('proGizeUserManagementBundle:Account:new',
            array('form' => $form->createView())
        );

        return $response;
    }
}