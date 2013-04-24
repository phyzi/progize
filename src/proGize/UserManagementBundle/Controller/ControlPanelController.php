<?php

namespace proGize\UserManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ControlPanelController	  extends Controller
{
    public function initAction()
    {
        return $this->render('proGizeUserManagementBundle:ControlPanel:ControlPanel.html.twig');
    }
}
