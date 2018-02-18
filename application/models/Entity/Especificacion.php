<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Especificacion
 *
 * @ORM\Table(name="especificacion", indexes={@ORM\Index(name="idreserva", columns={"idreserva"}), @ORM\Index(name="idpiso", columns={"idpiso"})})
 * @ORM\Entity
 */
class Especificacion
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
     * @ORM\Column(name="NewAttribute", type="integer", nullable=false)
     */
    private $newattribute;

    /**
     * @var string
     *
     * @ORM\Column(name="acceso", type="string", length=50, nullable=false)
     */
    private $acceso;

    /**
     * @var \Reservas
     *
     * @ORM\ManyToOne(targetEntity="Reservas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idreserva", referencedColumnName="id")
     * })
     */
    private $idreserva;

    /**
     * @var \Numero
     *
     * @ORM\ManyToOne(targetEntity="Numero")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpiso", referencedColumnName="id")
     * })
     */
    private $idpiso;



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
     * Set newattribute
     *
     * @param integer $newattribute
     *
     * @return Especificacion
     */
    public function setNewattribute($newattribute)
    {
        $this->newattribute = $newattribute;
    
        return $this;
    }

    /**
     * Get newattribute
     *
     * @return integer
     */
    public function getNewattribute()
    {
        return $this->newattribute;
    }

    /**
     * Set acceso
     *
     * @param string $acceso
     *
     * @return Especificacion
     */
    public function setAcceso($acceso)
    {
        $this->acceso = $acceso;
    
        return $this;
    }

    /**
     * Get acceso
     *
     * @return string
     */
    public function getAcceso()
    {
        return $this->acceso;
    }

    /**
     * Set idreserva
     *
     * @param \Reservas $idreserva
     *
     * @return Especificacion
     */
    public function setIdreserva(\Reservas $idreserva = null)
    {
        $this->idreserva = $idreserva;
    
        return $this;
    }

    /**
     * Get idreserva
     *
     * @return \Reservas
     */
    public function getIdreserva()
    {
        return $this->idreserva;
    }

    /**
     * Set idpiso
     *
     * @param \Numero $idpiso
     *
     * @return Especificacion
     */
    public function setIdpiso(\Numero $idpiso = null)
    {
        $this->idpiso = $idpiso;
    
        return $this;
    }

    /**
     * Get idpiso
     *
     * @return \Numero
     */
    public function getIdpiso()
    {
        return $this->idpiso;
    }
}
