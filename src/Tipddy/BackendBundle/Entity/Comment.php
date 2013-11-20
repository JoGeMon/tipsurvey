<?php

namespace Tipddy\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 * @ORM\Table(name="tipsurvey_comment")
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
     
     /**
      * @ORM\Column(name="description", type="text", length=255)
      *
      */
    private $description;

/**
    *
    * @ORM\ManyToOne(targetEntity="Tipddy\SecurityBundle\Entity\User")
    * @ORM\JoinColumns({
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    * })
    */
    private $user;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="commentType")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="commenttype_id",    referencedColumnName="id")
     * })
     */
    private $typeComment;


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
     * Set description
     *
     * @param string $description
     * @return Comment
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set user
     *
     * @param \Tipddy\SecurityBundle\Entity\User $user
     * @return Comment
     */
    public function setUser(\Tipddy\SecurityBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Tipddy\SecurityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set typeComment
     *
     * @param \Tipddy\BackendBundle\Entity\commentType $typeComment
     * @return Comment
     */
    public function setTypeComment(\Tipddy\BackendBundle\Entity\commentType $typeComment = null)
    {
        $this->typeComment = $typeComment;
    
        return $this;
    }

    /**
     * Get typeComment
     *
     * @return \Tipddy\BackendBundle\Entity\commentType 
     */
    public function getTypeComment()
    {
        return $this->typeComment;
    }
}