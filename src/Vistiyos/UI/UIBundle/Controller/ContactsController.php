<?php

namespace Vistiyos\UI\UIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactsController extends Controller
{
    public function contactsAction()
    {
        return $this->render('VistiyosUIUIBundle:Contacts:contacts.html.twig', array(// ...
        ));
    }

    public function contactAction()
    {
        return $this->render('VistiyosUIUIBundle:Contacts:contact.html.twig', array(// ...
        ));
    }

    public function editContactAction()
    {
        return $this->render('VistiyosUIUIBundle:Contacts:editContact.html.twig', array(// ...
        ));
    }

}
