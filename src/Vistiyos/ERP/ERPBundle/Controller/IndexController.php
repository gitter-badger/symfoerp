<?php

namespace Vistiyos\ERP\ERPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        if($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->render('VistiyosERPERPBundle:Index:index.html.twig');
        }
        else{
            return $this->redirectToRoute('fos_user_security_login');
        }

    }
}
