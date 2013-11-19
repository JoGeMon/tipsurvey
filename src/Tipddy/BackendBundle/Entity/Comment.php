<?php

namespace Tipddy\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 * @ORM\Table(name="tipsurvey_comment")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="commentType")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="commenttype_id",    referencedColumnName="id")
     * })
     */
    private $typeComment;

    /**
    *
    * @ORM\ManyToOne(targetEntity="Tipddy\SecurityBundle\Entity\User")
    * @ORM\JoinColumns({
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    * })
    */
    private $user;


}
