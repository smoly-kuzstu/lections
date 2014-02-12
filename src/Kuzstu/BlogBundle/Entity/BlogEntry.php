<?php

namespace Kuzstu\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogEntry
 */
class BlogEntry
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $view_count;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return BlogEntry
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return BlogEntry
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set view_count
     *
     * @param integer $viewCount
     * @return BlogEntry
     */
    public function setViewCount($viewCount)
    {
        $this->view_count = $viewCount;

        return $this;
    }

    /**
     * Get view_count
     *
     * @return integer 
     */
    public function getViewCount()
    {
        return $this->view_count;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $order_positions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->order_positions = new \Doctrine\Common\Collections\ArrayCollection();
    }

   
    /**
     * Get order_positions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderPositions()
    {
        return $this->order_positions;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comment;


    /**
     * Add comment
     *
     * @param \Kuzstu\BlogBundle\Entity\Comment $comment
     * @return BlogEntry
     */
    public function addComment(\Kuzstu\BlogBundle\Entity\Comment $comment)
    {
        //This Line was added manualy to set a entry
        $comment->setBlogentry($this);
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \Kuzstu\BlogBundle\Entity\Comment $comment
     */
    public function removeComment(\Kuzstu\BlogBundle\Entity\Comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
