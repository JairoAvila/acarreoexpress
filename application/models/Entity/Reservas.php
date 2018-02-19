<?php


namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reservas
 *
 * @ORM\Table(name="reservas", indexes={@ORM\Index(name="idconductor", columns={"idconductor"}), @ORM\Index(name="idestado", columns={"idestado"}), @ORM\Index(name="idusuario", columns={"idusuario"})})
 * @ORM\Entity
 */
class Reservas
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
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="aksalida", type="string", length=50, nullable=false)
     */
    private $aksalida;

    /**
     * @var string
     *
     * @ORM\Column(name="dirsalida", type="string", length=50, nullable=false)
     */
    private $dirsalida;

    /**
     * @var string
     *
     * @ORM\Column(name="akllegada", type="string", length=50, nullable=false)
     */
    private $akllegada;

    /**
     * @var string
     *
     * @ORM\Column(name="dirllegada", type="string", length=50, nullable=false)
     */
    private $dirllegada;

    /**
     * @var Conductores
     *
     * @ORM\ManyToOne(targetEntity="Conductores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idconductor", referencedColumnName="id")
     * })
     */
    private $idconductor;

    /**
     * @var Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestado", referencedColumnName="id")
     * })
     */
    private $idestado;

    /**
     * @var Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuario", referencedColumnName="id")
     * })
     */
    private $idusuario;



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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Reservas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set aksalida
     *
     * @param string $aksalida
     *
     * @return Reservas
     */
    public function setAksalida($aksalida)
    {
        $this->aksalida = $aksalida;
    
        return $this;
    }

    /**
     * Get aksalida
     *
     * @return string
     */
    public function getAksalida()
    {
        return $this->aksalida;
    }

    /**
     * Set dirsalida
     *
     * @param string $dirsalida
     *
     * @return Reservas
     */
    public function setDirsalida($dirsalida)
    {
        $this->dirsalida = $dirsalida;
    
        return $this;
    }

    /**
     * Get dirsalida
     *
     * @return string
     */
    public function getDirsalida()
    {
        return $this->dirsalida;
    }

    /**
     * Set akllegada
     *
     * @param string $akllegada
     *
     * @return Reservas
     */
    public function setAkllegada($akllegada)
    {
        $this->akllegada = $akllegada;
    
        return $this;
    }

    /**
     * Get akllegada
     *
     * @return string
     */
    public function getAkllegada()
    {
        return $this->akllegada;
    }

    /**
     * Set dirllegada
     *
     * @param string $dirllegada
     *
     * @return Reservas
     */
    public function setDirllegada($dirllegada)
    {
        $this->dirllegada = $dirllegada;
    
        return $this;
    }

    /**
     * Get dirllegada
     *
     * @return string
     */
    public function getDirllegada()
    {
        return $this->dirllegada;
    }

    /**
     * Set idconductor
     *
     * @param Conductores $idconductor
     *
     * @return Reservas
     */
    public function setIdconductor(Conductores $idconductor = null)
    {
        $this->idconductor = $idconductor;
    
        return $this;
    }

    /**
     * Get idconductor
     *
     * @return Conductores
     */
    public function getIdconductor()
    {
        return $this->idconductor;
    }

    /**
     * Set idestado
     *
     * @param Estados $idestado
     *
     * @return Reservas
     */
    public function setIdestado(Estados $idestado = null)
    {
        $this->idestado = $idestado;
    
        return $this;
    }

    /**
     * Get idestado
     *
     * @return Estados
     */
    public function getIdestado()
    {
        return $this->idestado;
    }

    /**
     * Set idusuario
     *
     * @param Usuarios $idusuario
     *
     * @return Reservas
     */
    public function setIdusuario(Usuarios $idusuario = null)
    {
        $this->idusuario = $idusuario;
    
        return $this;
    }

    /**
     * Get idusuario
     *
     * @return Usuarios
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}
