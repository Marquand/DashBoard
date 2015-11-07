<?php

namespace PointWeb\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\FicheBundle\Entity\Autre;
use PointWeb\FicheBundle\Form\AutreType;

/**
 * Autre controller.
 *
 */
class AutreController extends Controller
{

    /**
     * Lists all Autre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PointWebFicheBundle:Autre')->findAll();

        return $this->render('PointWebFicheBundle:Autre:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Autre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Autre();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('autre_show', array('id' => $entity->getId())));
        }

        return $this->render('PointWebFicheBundle:Autre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Autre entity.
     *
     * @param Autre $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Autre $entity)
    {
        $form = $this->createForm(new AutreType(), $entity, array(
            'action' => $this->generateUrl('autre_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Autre entity.
     *
     */
    public function newAction()
    {
        $entity = new Autre();
        $form   = $this->createCreateForm($entity);

        return $this->render('PointWebFicheBundle:Autre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Autre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebFicheBundle:Autre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebFicheBundle:Autre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Autre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebFicheBundle:Autre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autre entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebFicheBundle:Autre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Autre entity.
    *
    * @param Autre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Autre $entity)
    {
        $form = $this->createForm(new AutreType(), $entity, array(
            'action' => $this->generateUrl('autre_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Autre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebFicheBundle:Autre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('autre_edit', array('id' => $id)));
        }

        return $this->render('PointWebFicheBundle:Autre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Autre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebFicheBundle:Autre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Autre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('autre'));
    }

    /**
     * Creates a form to delete a Autre entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('autre_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
