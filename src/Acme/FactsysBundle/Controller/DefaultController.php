<?php

namespace Acme\FactsysBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeFactsysBundle:Default:index.html.twig', array('name' => $name));
    }
}
