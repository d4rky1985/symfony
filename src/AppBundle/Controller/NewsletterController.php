<?php
/**
 * Created by PhpStorm.
 * User: dan.paun
 * Date: 9/1/2015
 * Time: 4:18 PM
 */

namespace AppBundle\Controller;

use AppBundle\Service\NewsletterSender;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Parser;
use JMS\DiExtraBundle\Annotation as DI;

class NewsletterController
{
    /**
     * @DI\Inject("app.newsletter_sender")
     * @var NewsletterSender
     */
    public $newsletterSender;

    /**
     * @Route("newsletter/send", name="newsletter_send")
     */
    public function sendAction()
    {
        return $this->newsletterSender->send();
    }
}