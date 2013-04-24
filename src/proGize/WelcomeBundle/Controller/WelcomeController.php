<?php

namespace proGize\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function initAction()
    {
        return $this->render('proGizeWelcomeBundle:Welcome:init.html.twig');
    }
}
