<?php

namespace Kuzstu\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kuzstu\BlogBundle\Entity\BlogEntry;

/**
 * BlogEntry controller.
 *
 */
class BlogEntryController extends Controller
{

    /**
     * Lists all BlogEntry entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KuzstuBlogBundle:BlogEntry')->findAll();

        return $this->render('KuzstuBlogBundle:BlogEntry:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a BlogEntry entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KuzstuBlogBundle:BlogEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BlogEntry entity.');
        }

        return $this->render('KuzstuBlogBundle:BlogEntry:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
