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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}

