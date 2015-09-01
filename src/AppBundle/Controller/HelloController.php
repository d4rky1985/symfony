<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    /**
     * @Route("/hello/{name}", name="hellopage")
     */
    public function indexAction($name)
    {
        // replace this example code with whatever you need
        return new Response('<html><body>Hello '.$name.'</body></html>');
    }
}
