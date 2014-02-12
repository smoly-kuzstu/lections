<?php

namespace Kuzstu\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Kuzstu\BlogBundle\Model as Model; 

class BackendController extends Controller
{
    /**
     * @Route("/add/{title}/{content}", name="kuzstu_blog_add_item")
     * @Method("POST")
     * 
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
