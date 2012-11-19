<?php

namespace SeerUK\IrisMail\MailboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SeerUKIrisMailMailboxBundle:Mailbox:index.html.twig');
    }
}
