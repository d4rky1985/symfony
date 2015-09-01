<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class HelloControllerTest extends KernelTestCase
{
    public function testIndex()
    {
        static::bootKernel();

        $controller = static::$kernel->getContainer()->get('app.hello_controller');

        $response = $controller->indexAction('name');

        $this->assertContains('name', $response->getContent());
    }
}
