<?php

namespace Kuzstu\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 */
class Comment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $comment_text;

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
     * Set comment_text
     *
     * @param string $commentText
     * @return Comment
     */
    public function setCommentText($commentText)
    {
        $this->comment_text = $commentText;

        return $this;
    }

    /**
     * Get comment_text
     *
     * @return string 
     */
    public function getCommentText()
    {
        return $this->comment_text;
    }

   
    /**
     * @var \Kuzstu\BlogBundle\Entity\BlogEntry
     */
    private $blogentry;


    /**
     * Set blogentry
     *
     * @param \Kuzstu\BlogBundle\Entity\BlogEntry $blogentry
     * @return Comment
     */
    public function setBlogentry(\Kuzstu\BlogBundle\Entity\BlogEntry $blogentry = null)
    {
        $this->blogentry = $blogentry;

        return $this;
    }

    /**
     * Get blogentry
     *
     * @return \Kuzstu\BlogBundle\Entity\BlogEntry 
     */
    public function getBlogentry()
    {
        return $this->blogentry;
    }
}
