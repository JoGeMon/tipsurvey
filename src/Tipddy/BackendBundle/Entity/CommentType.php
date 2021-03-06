<?php

namespace Tipddy\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentType
 *
 * @ORM\Table(name="tipsurvey_commenttype")
 * @ORM\Entity
 */
class CommentType
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
    * @ORM\Column(name="etiqueta", type="string", length=255, nullable=false)
    *
    */
    private $etiqueta;

    /**
    *
    * @ORM\ManyToOne(targetEntity="Tipddy\SecurityBundle\Entity\User")
    * @ORM\JoinColumns({
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    * })
    */
    private $user;
       


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
     * Set etiqueta
     *
     * @param string $etiqueta
     * @return CommentType
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;
    
        return $this;
    }

    /**
     * Get etiqueta
     *
     * @return string 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Set user
     *
     * @param \Tipddy\SecurityBundle\Entity\User $user
     * @return CommentType
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
}