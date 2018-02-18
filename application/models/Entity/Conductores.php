<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Conductores
 *
 * @ORM\Table(name="conductores", indexes={@ORM\Index(name="idregistro", columns={"idregistro"}), @ORM\Index(name="idvehiculo", columns={"idvehiculo"}), @ORM\Index(name="idempresa", columns={"idempresa"})})
 * @ORM\Entity
 */
class Conductores
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
     * @ORM\Column(name="numerolicencia", type="string", length=50, nullable=false)
     */
    private $numerolicencia;

    /**
     * @var string
     *
     * @ORM\Column(name="expidelicencia", type="string", length=50, nullable=false)
     */
    private $expidelicencia;

    /**
     * @var string
     *
     * @ORM\Column(name="vencimientolicencia", type="string", length=50, nullable=false)
     */
    private $vencimientolicencia;

    /**
     * @var \Registros
     *
     * @ORM\ManyToOne(targetEntity="Registros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idregistro", referencedColumnName="id")
     * })
     */
    private $idregistro;

    /**
     * @var \Vehiculos
     *
     * @ORM\ManyToOne(targetEntity="Vehiculos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idvehiculo", referencedColumnName="id")
     * })
     */
    private $idvehiculo;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idempresa", referencedColumnName="id")
     * })
     */
    private $idempresa;



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
     * Set numerolicencia
     *
     * @param string $numerolicencia
     *
     * @return Conductores
     */
    public function setNumerolicencia($numerolicencia)
    {
        $this->numerolicencia = $numerolicencia;
    
        return $this;
    }

    /**
     * Get numerolicencia
     *
     * @return string
     */
    public function getNumerolicencia()
    {
        return $this->numerolicencia;
    }

    /**
     * Set expidelicencia
     *
     * @param string $expidelicencia
     *
     * @return Conductores
     */
    public function setExpidelicencia($expidelicencia)
    {
        $this->expidelicencia = $expidelicencia;
    
        return $this;
    }

    /**
     * Get expidelicencia
     *
     * @return string
     */
    public function getExpidelicencia()
    {
        return $this->expidelicencia;
    }

    /**
     * Set vencimientolicencia
     *
     * @param string $vencimientolicencia
     *
     * @return Conductores
     */
    public function setVencimientolicencia($vencimientolicencia)
    {
        $this->vencimientolicencia = $vencimientolicencia;
    
        return $this;
    }

    /**
     * Get vencimientolicencia
     *
     * @return string
     */
    public function getVencimientolicencia()
    {
        return $this->vencimientolicencia;
    }

    /**
     * Set idregistro
     *
     * @param \Registros $idregistro
     *
     * @return Conductores
     */
    public function setIdregistro(\Registros $idregistro = null)
    {
        $this->idregistro = $idregistro;
    
        return $this;
    }

    /**
     * Get idregistro
     *
     * @return \Registros
     */
    public function getIdregistro()
    {
        return $this->idregistro;
    }

    /**
     * Set idvehiculo
     *
     * @param \Vehiculos $idvehiculo
     *
     * @return Conductores
     */
    public function setIdvehiculo(\Vehiculos $idvehiculo = null)
    {
        $this->idvehiculo = $idvehiculo;
    
        return $this;
    }

    /**
     * Get idvehiculo
     *
     * @return \Vehiculos
     */
    public function getIdvehiculo()
    {
        return $this->idvehiculo;
    }

    /**
     * Set idempresa
     *
     * @param \Empresa $idempresa
     *
     * @return Conductores
     */
    public function setIdempresa(\Empresa $idempresa = null)
    {
        $this->idempresa = $idempresa;
    
        return $this;
    }

    /**
     * Get idempresa
     *
     * @return \Empresa
     */
    public function getIdempresa()
    {
        return $this->idempresa;
    }
}
