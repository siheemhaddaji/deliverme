<?php

namespace Front\endBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class frontController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
