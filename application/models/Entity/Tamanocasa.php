<?php


namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tamanocasa
 *
 * @ORM\Table(name="tamanocasa")
 * @ORM\Entity
 */
class Tamanocasa
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
     * @var integer
     *
     * @ORM\Column(name="tamanoinicio", type="integer", nullable=false)
     */
    private $tamanoinicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="tamanofinal", type="integer", nullable=false)
     */
    private $tamanofinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="precio", type="integer", nullable=false)
     */
    private $precio;



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
     * Set tamanoinicio
     *
     * @param integer $tamanoinicio
     *
     * @return Tamanocasa
     */
    public function setTamanoinicio($tamanoinicio)
    {
        $this->tamanoinicio = $tamanoinicio;
    
        return $this;
    }

    /**
     * Get tamanoinicio
     *
     * @return integer
     */
    public function getTamanoinicio()
    {
        return $this->tamanoinicio;
    }

    /**
     * Set tamanofinal
     *
     * @param integer $tamanofinal
     *
     * @return Tamanocasa
     */
    public function setTamanofinal($tamanofinal)
    {
        $this->tamanofinal = $tamanofinal;
    
        return $this;
    }

    /**
     * Get tamanofinal
     *
     * @return integer
     */
    public function getTamanofinal()
    {
        return $this->tamanofinal;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     *
     * @return Tamanocasa
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return integer
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
