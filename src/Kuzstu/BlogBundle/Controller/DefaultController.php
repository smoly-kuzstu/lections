<?php

namespace Kuzstu\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Kuzstu\BlogBundle\Model as Model; 

class DefaultController extends Controller
{
   /**
     * @Route("/", name="kuzstu_blog_index")
     * @Template("KuzstuBlogBundle:Default:index.html.twig")
    */
    public function indexAction()
    {
        $model = $this->container->get('kuzstu_blog.crud_model');
        return array(
            'items' => $model->readItemsList()
        );
    }
    
   /**
     * @Route("/viewitem/{id}", name="kuzstu_blog_view_item")
     * @Method("GET")
     * @Template()
    */
    public function viewItemAction($id){
        $model = $this->container->get('kuzstu_blog.crud_model');
        return array(
            'item' => $model->readItem($id)
        );
    }
    
    /**
     * @Route("/add/{title}/{content}", name="kuzstu_blog_add_item")
     * @Method("POST")
     * @Template()
    */
    public function addItemAction($title, $content){
        $model = $this->container->get('kuzstu_blog.crud_model');
        $model->createItem($title, $content);
    }
    
     /**
     * @Route("/add-comment/{id}/{content}", name="kuzstu_blog_add_item")
     * @Method("GET")
     * 
    */
    public function addCommentAction($id, $content){
        $model = $this->container->get('kuzstu_blog.crud_model');
        $model->addComment($id, $content);
        return new Response('Comment was added!', 200);
    }
}
