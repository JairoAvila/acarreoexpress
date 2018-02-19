<?php


namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Estados
 *
 * @ORM\Table(name="estados", indexes={@ORM\Index(name="idtipoestado", columns={"idtipoestado"})})
 * @ORM\Entity
 */
class Estados
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
     * @ORM\Column(name="estado", type="string", length=50, nullable=false)
     */
    private $estado;

    /**
     * @var Tipoestados
     *
     * @ORM\ManyToOne(targetEntity="Tipoestados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipoestado", referencedColumnName="id")
     * })
     */
    private $idtipoestado;



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
     * Set estado
     *
     * @param string $estado
     *
     * @return Estados
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idtipoestado
     *
     * @param Tipoestados $idtipoestado
     *
     * @return Estados
     */
    public function setIdtipoestado(Tipoestados $idtipoestado = null)
    {
        $this->idtipoestado = $idtipoestado;
    
        return $this;
    }

    /**
     * Get idtipoestado
     *
     * @return Tipoestados
     */
    public function getIdtipoestado()
    {
        return $this->idtipoestado;
    }
}
