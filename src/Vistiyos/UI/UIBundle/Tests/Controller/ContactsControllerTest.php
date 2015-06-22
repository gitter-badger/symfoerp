<?php

namespace Vistiyos\UI\UIBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactsControllerTest extends WebTestCase
{
    public function testContacts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts');
    }

    public function testContact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact');
    }

    public function testEditcontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact/edit');
    }

}
