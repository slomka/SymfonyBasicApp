<?php

namespace Basic\App\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    #create new fields
    
    
    /**
     *
     * @var string
     * @ORM\Column(name="name", type="string", length=255, unique=false, nullable=false)
     */
    private $name;
    
     /**
     *
     * @var string
     * @ORM\Column(name="desctipion", type="text", unique=false, nullable=true)
     */
    private $description;
    
     /**
     *
     * @var float
     * @ORM\Column(name="price", type="decimal", precision=9, scale=2, unique=false, nullable=false)
     */
    private $price;
    
    



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
