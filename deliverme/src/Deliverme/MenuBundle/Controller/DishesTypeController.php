<?php

namespace Deliverme\MenuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Deliverme\MenuBundle\Entity\DishesType;
use Deliverme\MenuBundle\Form\DishesTypeType;

/**
 * DishesType controller.
 *
 */
class DishesTypeController extends Controller
{

    /**
     * Lists all DishesType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DelivermeMenuBundle:DishesType')->findAll();

        return $this->render('DelivermeMenuBundle:DishesType:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new DishesType entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new DishesType();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dishestype_show', array('id' => $entity->getId())));
        }

        return $this->render('DelivermeMenuBundle:DishesType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a DishesType entity.
     *
     * @param DishesType $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DishesType $entity)
    {
        $form = $this->createForm(new DishesTypeType(), $entity, array(
            'action' => $this->generateUrl('dishestype_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DishesType entity.
     *
     */
    public function newAction()
    {
        $entity = new DishesType();
        $form   = $this->createCreateForm($entity);

        return $this->render('DelivermeMenuBundle:DishesType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DishesType entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:DishesType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DishesType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DelivermeMenuBundle:DishesType:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DishesType entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:DishesType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DishesType entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DelivermeMenuBundle:DishesType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a DishesType entity.
    *
    * @param DishesType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DishesType $entity)
    {
        $form = $this->createForm(new DishesTypeType(), $entity, array(
            'action' => $this->generateUrl('dishestype_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DishesType entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DelivermeMenuBundle:DishesType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DishesType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('dishestype_edit', array('id' => $id)));
        }

        return $this->render('DelivermeMenuBundle:DishesType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a DishesType entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DelivermeMenuBundle:DishesType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DishesType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dishestype'));
    }

    /**
     * Creates a form to delete a DishesType entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dishestype_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
