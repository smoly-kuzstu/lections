<?php

namespace Kuzstu\BlogBundle\Model;

use Kuzstu\BlogBundle\Entity as Entity;

class CrudOperationsModel extends BaseModel
{
    protected $entityManager;
    
    public function __construct($doctrineManager){
        $this->entityManager = $doctrineManager;
    }
    
    /**
     * This function create a new entry in a blog
     * @param string $title Title of entry
     * @param string $content Text of blog entry
    */   
    
    public function createItem($title, $content){
        $entry = new Entity\BlogEntry();
        
        $entry->setTitle($title);
        $entry->setContent($content);
        
        $this->entityManager->persist($entry);
        $this->entityManager->flush();
    }
    
    /**
     * Get a blog entry by it's number
     * @return Entity\BlogEntry Return blog entry by it's id
     * @param int $id Identificator of blog entry
    */
    public function readItem($id){
        $item = $this->entityManager->find('KuzstuBlogBundle:BlogEntry', $id);
        return $item;
    }
    
    /**
     * Get a list of all blog  entries
     * 
    */
    public function readItemsList(){
        $repository = $this->entityManager->getRepository('KuzstuBlogBundle:BlogEntry');
        return $repository->findAll();
    }
    
    /**
     * Update blog entry
     * @param int $id Identificator of entry for update
     * @param string $title Title of entry
     * @param string $content Text of blog entry
     */
    
    public function updateItem($id, $item, $title){
        
    }
    
    /**
     * Delete blog entry
     * @param int $id Identificator of entry for delete
     */
    public function deleteItem($id){
        
    }
    
   
}
