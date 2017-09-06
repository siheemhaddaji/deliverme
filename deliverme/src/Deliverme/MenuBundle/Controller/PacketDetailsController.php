<?php

namespace Deliverme\MenuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Deliverme\MenuBundle\Entity\PacketDetails;
use Deliverme\MenuBundle\Form\PacketDetailsType;

/**
 * PacketDetails controller.
 *
 */
class PacketDetailsController extends Controller
{

    /**
     * Lists all PacketDetails entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DelivermeMenuBundle:PacketDetails')->findAll();

        return $this->render('DelivermeMenuBundle:PacketDetails:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PacketDetails entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PacketDetails();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('packetdetails_show', array('id' => $entity->getId())));
        }

        return $this->render('DelivermeMenuBundle:PacketDetails:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PacketDetails entity.
     *
     * @param PacketDetails $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PacketDetails $entity)
    {
        $form = $this->createForm(new PacketDetailsType(), $entity, array(
            'action' => $this->generateUrl('packetdetails_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PacketDetails entity.
     *
     */
    public function newAction()
    {
        $entity = new PacketDetails();
        $form   = $this->createCreateForm($entity);

        return $this->render('DelivermeMenuBundle:PacketDetails:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PacketDetails entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:PacketDetails')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PacketDetails entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DelivermeMenuBundle:PacketDetails:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PacketDetails entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:PacketDetails')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PacketDetails entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DelivermeMenuBundle:PacketDetails:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PacketDetails entity.
    *
    * @param PacketDetails $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PacketDetails $entity)
    {
        $form = $this->createForm(new PacketDetailsType(), $entity, array(
            'action' => $this->generateUrl('packetdetails_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PacketDetails entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:PacketDetails')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PacketDetails entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('packetdetails_edit', array('id' => $id)));
        }

        return $this->render('DelivermeMenuBundle:PacketDetails:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PacketDetails entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DelivermeMenuBundle:PacketDetails')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PacketDetails entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('packetdetails'));
    }

    /**
     * Creates a form to delete a PacketDetails entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('packetdetails_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
