<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    public function testPostRegisterNewUser()
    {
        $data = [
            'username' => 'matko',
            'email' => 'matko@gmail.com',
            'plainPassword' => [
                'first' => 'test123', 'second' => 'test123'
            ]
        ];

        $client = static::createClient();
        $client->request(
            'POST', '/api/register', array(), array(),
            array(
                'CONTENT_TYPE' => 'application/json',
            ),
            json_encode($data)
        );

        $this->assertEquals(
            201, $client->getResponse()->getStatusCode()
        );
    }
}