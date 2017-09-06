<?php

namespace Deliverme\MenuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Deliverme\MenuBundle\Entity\Client;
use Deliverme\MenuBundle\Form\ClientType;

/**
 * Client controller.
 *
 */
class ContactController extends Controller
{

    /**
     * Lists all Client entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontendBundle:Contact')->findAll();

        return $this->render('DelivermeMenuBundle:Contact:index.html.twig', array(
            'entities' => $entities,
        ));
    }



}
