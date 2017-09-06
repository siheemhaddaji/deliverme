<?php

namespace Front\endBundle\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Front\endBundle\Entity\Contact;
use Front\endBundle\Entity\ContactUs ;
use Front\endBundle\Form\ContactUsType ;

class frontController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontendBundle::index.html.twig');
    }
    
    public function menueAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DelivermeMenuBundle:Dishes')->findAll(); 
       return $this->render('FrontendBundle::menue.html.twig',array ('dishes'=>$entities))
       ;
    } 
    
    public function aboutAction()
    {
        return $this->render('FrontendBundle::about.html.twig'); 
    }
       public function contactAction()
    {
        return $this->render('FrontendBundle::contact.html.twig'); 
    }
    
    public function contactusAction(Request $request)
    {
        $entity = new Contact();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('frontend_contactus', array('id' => $entity->getId())));
        }

        return $this->render('FrontendBundle::contactus.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    /**
     * Creates a form to create a Contact entity.
     *
     * @param Contact $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Contact $entity)
    {
        $form = $this->createForm(new ContactUsType(), $entity, array(
            'action' => $this->generateUrl('frontend_contactus'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'sent' , 'attr'=>array("class"=> "submitBtn") ));

        return $form;
    }
    }
