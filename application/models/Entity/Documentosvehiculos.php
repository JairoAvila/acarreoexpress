<?php


namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Documentosvehiculos
 *
 * @ORM\Table(name="documentosvehiculos", indexes={@ORM\Index(name="idvehiculo", columns={"idvehiculo"}), @ORM\Index(name="idestado", columns={"idestado"})})
 * @ORM\Entity
 */
class Documentosvehiculos
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
     * @ORM\Column(name="pathlicencia", type="string", length=50, nullable=true)
     */
    private $pathlicencia;

    /**
     * @var string
     *
     * @ORM\Column(name="pathtarjetapropiedad", type="string", length=50, nullable=true)
     */
    private $pathtarjetapropiedad;

    /**
     * @var string
     *
     * @ORM\Column(name="pathtarjetaoperacion", type="string", length=50, nullable=true)
     */
    private $pathtarjetaoperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="pathsoat", type="string", length=50, nullable=true)
     */
    private $pathsoat;

    /**
     * @var string
     *
     * @ORM\Column(name="pathtecnomecanica", type="string", length=50, nullable=true)
     */
    private $pathtecnomecanica;

    /**
     * @var string
     *
     * @ORM\Column(name="cedulaconductor", type="string", length=50, nullable=true)
     */
    private $cedulaconductor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=true)
     */
    private $updatedAt;

    /**
     * @var Vehiculos
     *
     * @ORM\ManyToOne(targetEntity="Vehiculos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idvehiculo", referencedColumnName="id")
     * })
     */
    private $idvehiculo;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pathlicencia
     *
     * @param string $pathlicencia
     *
     * @return Documentosvehiculos
     */
    public function setPathlicencia($pathlicencia)
    {
        $this->pathlicencia = $pathlicencia;
    
        return $this;
    }

    /**
     * Get pathlicencia
     *
     * @return string
     */
    public function getPathlicencia()
    {
        return $this->pathlicencia;
    }

    /**
     * Set pathtarjetapropiedad
     *
     * @param string $pathtarjetapropiedad
     *
     * @return Documentosvehiculos
     */
    public function setPathtarjetapropiedad($pathtarjetapropiedad)
    {
        $this->pathtarjetapropiedad = $pathtarjetapropiedad;
    
        return $this;
    }

    /**
     * Get pathtarjetapropiedad
     *
     * @return string
     */
    public function getPathtarjetapropiedad()
    {
        return $this->pathtarjetapropiedad;
    }

    /**
     * Set pathtarjetaoperacion
     *
     * @param string $pathtarjetaoperacion
     *
     * @return Documentosvehiculos
     */
    public function setPathtarjetaoperacion($pathtarjetaoperacion)
    {
        $this->pathtarjetaoperacion = $pathtarjetaoperacion;
    
        return $this;
    }

    /**
     * Get pathtarjetaoperacion
     *
     * @return string
     */
    public function getPathtarjetaoperacion()
    {
        return $this->pathtarjetaoperacion;
    }

    /**
     * Set pathsoat
     *
     * @param string $pathsoat
     *
     * @return Documentosvehiculos
     */
    public function setPathsoat($pathsoat)
    {
        $this->pathsoat = $pathsoat;
    
        return $this;
    }

    /**
     * Get pathsoat
     *
     * @return string
     */
    public function getPathsoat()
    {
        return $this->pathsoat;
    }

    /**
     * Set pathtecnomecanica
     *
     * @param string $pathtecnomecanica
     *
     * @return Documentosvehiculos
     */
    public function setPathtecnomecanica($pathtecnomecanica)
    {
        $this->pathtecnomecanica = $pathtecnomecanica;
    
        return $this;
    }

    /**
     * Get pathtecnomecanica
     *
     * @return string
     */
    public function getPathtecnomecanica()
    {
        return $this->pathtecnomecanica;
    }

    /**
     * Set cedulaconductor
     *
     * @param string $cedulaconductor
     *
     * @return Documentosvehiculos
     */
    public function setCedulaconductor($cedulaconductor)
    {
        $this->cedulaconductor = $cedulaconductor;
    
        return $this;
    }

    /**
     * Get cedulaconductor
     *
     * @return string
     */
    public function getCedulaconductor()
    {
        return $this->cedulaconductor;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Documentosvehiculos
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Documentosvehiculos
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set idvehiculo
     *
     * @param Vehiculos $idvehiculo
     *
     * @return Documentosvehiculos
     */
    public function setIdvehiculo(Vehiculos $idvehiculo = null)
    {
        $this->idvehiculo = $idvehiculo;
    
        return $this;
    }

    /**
     * Get idvehiculo
     *
     * @return Vehiculos
     */
    public function getIdvehiculo()
    {
        return $this->idvehiculo;
    }

    /**
     * Set idestado
     *
     * @param Estados $idestado
     *
     * @return Documentosvehiculos
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
}
