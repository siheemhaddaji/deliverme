<?php

namespace Deliverme\MenuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Deliverme\MenuBundle\Entity\Packet;
use Deliverme\MenuBundle\Form\PacketType;

/**
 * Packet controller.
 *
 */
class PacketController extends Controller
{

    /**
     * Lists all Packet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DelivermeMenuBundle:Packet')->findAll();

        return $this->render('DelivermeMenuBundle:Packet:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Packet entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Packet();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('packet_show', array('id' => $entity->getId())));
        }

        return $this->render('DelivermeMenuBundle:Packet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Packet entity.
     *
     * @param Packet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Packet $entity)
    {
        $form = $this->createForm(new PacketType(), $entity, array(
            'action' => $this->generateUrl('packet_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Packet entity.
     *
     */
    public function newAction()
    {
        $entity = new Packet();
        $form   = $this->createCreateForm($entity);

        return $this->render('DelivermeMenuBundle:Packet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Packet entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:Packet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Packet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DelivermeMenuBundle:Packet:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Packet entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:Packet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Packet entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DelivermeMenuBundle:Packet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Packet entity.
    *
    * @param Packet $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Packet $entity)
    {
        $form = $this->createForm(new PacketType(), $entity, array(
            'action' => $this->generateUrl('packet_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Packet entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:Packet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Packet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('packet_edit', array('id' => $id)));
        }

        return $this->render('DelivermeMenuBundle:Packet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Packet entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DelivermeMenuBundle:Packet')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Packet entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('packet'));
    }

    /**
     * Creates a form to delete a Packet entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('packet_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
