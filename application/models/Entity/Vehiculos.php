<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Vehiculos
 *
 * @ORM\Table(name="vehiculos", indexes={@ORM\Index(name="idestado", columns={"idestado"})})
 * @ORM\Entity
 */
class Vehiculos
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
     * @ORM\Column(name="placa", type="string", length=50, nullable=false)
     */
    private $placa;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=50, nullable=false)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="marcar", type="string", length=50, nullable=false)
     */
    private $marcar;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50, nullable=false)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="tarjetapropiedad", type="string", length=50, nullable=false)
     */
    private $tarjetapropiedad;

    /**
     * @var string
     *
     * @ORM\Column(name="capacidad", type="string", length=50, nullable=false)
     */
    private $capacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="numerochasis", type="string", length=50, nullable=false)
     */
    private $numerochasis;

    /**
     * @var string
     *
     * @ORM\Column(name="numerotarjetaoperacion", type="string", length=50, nullable=false)
     */
    private $numerotarjetaoperacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expidetarjetaoperacion", type="date", nullable=false)
     */
    private $expidetarjetaoperacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencimientotarjetaoperacion", type="date", nullable=false)
     */
    private $vencimientotarjetaoperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="numerotecnomecanica", type="string", length=50, nullable=false)
     */
    private $numerotecnomecanica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expidetecnomecanica", type="date", nullable=false)
     */
    private $expidetecnomecanica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencimientotecnomecanica", type="date", nullable=false)
     */
    private $vencimientotecnomecanica;

    /**
     * @var string
     *
     * @ORM\Column(name="numerosoat", type="string", length=50, nullable=false)
     */
    private $numerosoat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expidesoat", type="date", nullable=false)
     */
    private $expidesoat;

    /**
     * @var integer
     *
     * @ORM\Column(name="vencimientosoat", type="integer", nullable=false)
     */
    private $vencimientosoat;

    /**
     * @var \Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestado", referencedColumnName="id")
     * })
     */
    private $idestado;



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
     * Set placa
     *
     * @param string $placa
     *
     * @return Vehiculos
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    
        return $this;
    }

    /**
     * Get placa
     *
     * @return string
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Vehiculos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set marcar
     *
     * @param string $marcar
     *
     * @return Vehiculos
     */
    public function setMarcar($marcar)
    {
        $this->marcar = $marcar;
    
        return $this;
    }

    /**
     * Get marcar
     *
     * @return string
     */
    public function getMarcar()
    {
        return $this->marcar;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Vehiculos
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set tarjetapropiedad
     *
     * @param string $tarjetapropiedad
     *
     * @return Vehiculos
     */
    public function setTarjetapropiedad($tarjetapropiedad)
    {
        $this->tarjetapropiedad = $tarjetapropiedad;
    
        return $this;
    }

    /**
     * Get tarjetapropiedad
     *
     * @return string
     */
    public function getTarjetapropiedad()
    {
        return $this->tarjetapropiedad;
    }

    /**
     * Set capacidad
     *
     * @param string $capacidad
     *
     * @return Vehiculos
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    
        return $this;
    }

    /**
     * Get capacidad
     *
     * @return string
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set numerochasis
     *
     * @param string $numerochasis
     *
     * @return Vehiculos
     */
    public function setNumerochasis($numerochasis)
    {
        $this->numerochasis = $numerochasis;
    
        return $this;
    }

    /**
     * Get numerochasis
     *
     * @return string
     */
    public function getNumerochasis()
    {
        return $this->numerochasis;
    }

    /**
     * Set numerotarjetaoperacion
     *
     * @param string $numerotarjetaoperacion
     *
     * @return Vehiculos
     */
    public function setNumerotarjetaoperacion($numerotarjetaoperacion)
    {
        $this->numerotarjetaoperacion = $numerotarjetaoperacion;
    
        return $this;
    }

    /**
     * Get numerotarjetaoperacion
     *
     * @return string
     */
    public function getNumerotarjetaoperacion()
    {
        return $this->numerotarjetaoperacion;
    }

    /**
     * Set expidetarjetaoperacion
     *
     * @param \DateTime $expidetarjetaoperacion
     *
     * @return Vehiculos
     */
    public function setExpidetarjetaoperacion($expidetarjetaoperacion)
    {
        $this->expidetarjetaoperacion = $expidetarjetaoperacion;
    
        return $this;
    }

    /**
     * Get expidetarjetaoperacion
     *
     * @return \DateTime
     */
    public function getExpidetarjetaoperacion()
    {
        return $this->expidetarjetaoperacion;
    }

    /**
     * Set vencimientotarjetaoperacion
     *
     * @param \DateTime $vencimientotarjetaoperacion
     *
     * @return Vehiculos
     */
    public function setVencimientotarjetaoperacion($vencimientotarjetaoperacion)
    {
        $this->vencimientotarjetaoperacion = $vencimientotarjetaoperacion;
    
        return $this;
    }

    /**
     * Get vencimientotarjetaoperacion
     *
     * @return \DateTime
     */
    public function getVencimientotarjetaoperacion()
    {
        return $this->vencimientotarjetaoperacion;
    }

    /**
     * Set numerotecnomecanica
     *
     * @param string $numerotecnomecanica
     *
     * @return Vehiculos
     */
    public function setNumerotecnomecanica($numerotecnomecanica)
    {
        $this->numerotecnomecanica = $numerotecnomecanica;
    
        return $this;
    }

    /**
     * Get numerotecnomecanica
     *
     * @return string
     */
    public function getNumerotecnomecanica()
    {
        return $this->numerotecnomecanica;
    }

    /**
     * Set expidetecnomecanica
     *
     * @param \DateTime $expidetecnomecanica
     *
     * @return Vehiculos
     */
    public function setExpidetecnomecanica($expidetecnomecanica)
    {
        $this->expidetecnomecanica = $expidetecnomecanica;
    
        return $this;
    }

    /**
     * Get expidetecnomecanica
     *
     * @return \DateTime
     */
    public function getExpidetecnomecanica()
    {
        return $this->expidetecnomecanica;
    }

    /**
     * Set vencimientotecnomecanica
     *
     * @param \DateTime $vencimientotecnomecanica
     *
     * @return Vehiculos
     */
    public function setVencimientotecnomecanica($vencimientotecnomecanica)
    {
        $this->vencimientotecnomecanica = $vencimientotecnomecanica;
    
        return $this;
    }

    /**
     * Get vencimientotecnomecanica
     *
     * @return \DateTime
     */
    public function getVencimientotecnomecanica()
    {
        return $this->vencimientotecnomecanica;
    }

    /**
     * Set numerosoat
     *
     * @param string $numerosoat
     *
     * @return Vehiculos
     */
    public function setNumerosoat($numerosoat)
    {
        $this->numerosoat = $numerosoat;
    
        return $this;
    }

    /**
     * Get numerosoat
     *
     * @return string
     */
    public function getNumerosoat()
    {
        return $this->numerosoat;
    }

    /**
     * Set expidesoat
     *
     * @param \DateTime $expidesoat
     *
     * @return Vehiculos
     */
    public function setExpidesoat($expidesoat)
    {
        $this->expidesoat = $expidesoat;
    
        return $this;
    }

    /**
     * Get expidesoat
     *
     * @return \DateTime
     */
    public function getExpidesoat()
    {
        return $this->expidesoat;
    }

    /**
     * Set vencimientosoat
     *
     * @param integer $vencimientosoat
     *
     * @return Vehiculos
     */
    public function setVencimientosoat($vencimientosoat)
    {
        $this->vencimientosoat = $vencimientosoat;
    
        return $this;
    }

    /**
     * Get vencimientosoat
     *
     * @return integer
     */
    public function getVencimientosoat()
    {
        return $this->vencimientosoat;
    }

    /**
     * Set idestado
     *
     * @param \Estados $idestado
     *
     * @return Vehiculos
     */
    public function setIdestado(\Estados $idestado = null)
    {
        $this->idestado = $idestado;
    
        return $this;
    }

    /**
     * Get idestado
     *
     * @return \Estados
     */
    public function getIdestado()
    {
        return $this->idestado;
    }
}
