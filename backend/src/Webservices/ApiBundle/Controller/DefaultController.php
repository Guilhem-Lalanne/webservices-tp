<?php

namespace Webservices\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebservicesApiBundle:Default:index.html.twig');
    }
}
