<?php

namespace Deliverme\MenuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Deliverme\MenuBundle\Entity\DeliveryMan;
use Deliverme\MenuBundle\Form\DeliveryManType;

/**
 * DeliveryMan controller.
 *
 */
class DeliveryManController extends Controller
{

    /**
     * Lists all DeliveryMan entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DelivermeMenuBundle:DeliveryMan')->findAll();

        return $this->render('DelivermeMenuBundle:DeliveryMan:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new DeliveryMan entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new DeliveryMan();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('deliveryman_show', array('id' => $entity->getId())));
        }

        return $this->render('DelivermeMenuBundle:DeliveryMan:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a DeliveryMan entity.
     *
     * @param DeliveryMan $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DeliveryMan $entity)
    {
        $form = $this->createForm(new DeliveryManType(), $entity, array(
            'action' => $this->generateUrl('deliveryman_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DeliveryMan entity.
     *
     */
    public function newAction()
    {
        $entity = new DeliveryMan();
        $form   = $this->createCreateForm($entity);

        return $this->render('DelivermeMenuBundle:DeliveryMan:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DeliveryMan entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:DeliveryMan')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DeliveryMan entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DelivermeMenuBundle:DeliveryMan:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DeliveryMan entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:DeliveryMan')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DeliveryMan entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DelivermeMenuBundle:DeliveryMan:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a DeliveryMan entity.
    *
    * @param DeliveryMan $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DeliveryMan $entity)
    {
        $form = $this->createForm(new DeliveryManType(), $entity, array(
            'action' => $this->generateUrl('deliveryman_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DeliveryMan entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:DeliveryMan')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DeliveryMan entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('deliveryman_edit', array('id' => $id)));
        }

        return $this->render('DelivermeMenuBundle:DeliveryMan:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a DeliveryMan entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DelivermeMenuBundle:DeliveryMan')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DeliveryMan entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('deliveryman'));
    }

    /**
     * Creates a form to delete a DeliveryMan entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deliveryman_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
