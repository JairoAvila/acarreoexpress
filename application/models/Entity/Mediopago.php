<?php


namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mediopago
 *
 * @ORM\Table(name="mediopago")
 * @ORM\Entity
 */
class Mediopago
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="medio", type="string", length=5, nullable=true)
     */
    private $medio;



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
     * Set medio
     *
     * @param string $medio
     *
     * @return Mediopago
     */
    public function setMedio($medio)
    {
        $this->medio = $medio;
    
        return $this;
    }

    /**
     * Get medio
     *
     * @return string
     */
    public function getMedio()
    {
        return $this->medio;
    }
}
