<?php


namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoestados
 *
 * @ORM\Table(name="tipoestados")
 * @ORM\Entity
 */
class Tipoestados
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
     * @ORM\Column(name="tipoestado", type="string", length=50, nullable=false)
     */
    private $tipoestado;



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
     * Set tipoestado
     *
     * @param string $tipoestado
     *
     * @return Tipoestados
     */
    public function setTipoestado($tipoestado)
    {
        $this->tipoestado = $tipoestado;
    
        return $this;
    }

    /**
     * Get tipoestado
     *
     * @return string
     */
    public function getTipoestado()
    {
        return $this->tipoestado;
    }
}
