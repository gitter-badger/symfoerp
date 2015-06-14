<?php

namespace Vistiyos\ERP\ERPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VistiyosERPERPBundle:Default:index.html.twig', array('name' => $name));
    }
}
