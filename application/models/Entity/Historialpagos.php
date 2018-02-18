<?php


namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Historialpagos
 *
 * @ORM\Table(name="historialpagos", indexes={@ORM\Index(name="idregistro", columns={"idregistro"}), @ORM\Index(name="idmediopago", columns={"idmediopago"}), @ORM\Index(name="idestado", columns={"idestado"})})
 * @ORM\Entity
 */
class Historialpagos
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecharecarga", type="date", nullable=false)
     */
    private $fecharecarga;

    /**
     * @var string
     *
     * @ORM\Column(name="valorrecarga", type="string", length=50, nullable=false)
     */
    private $valorrecarga;

    /**
     * @var string
     *
     * @ORM\Column(name="numtransaccion", type="string", length=50, nullable=false)
     */
    private $numtransaccion;

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
     * @var \Mediopago
     *
     * @ORM\ManyToOne(targetEntity="Mediopago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmediopago", referencedColumnName="id")
     * })
     */
    private $idmediopago;

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
     * Set fecharecarga
     *
     * @param \DateTime $fecharecarga
     *
     * @return Historialpagos
     */
    public function setFecharecarga($fecharecarga)
    {
        $this->fecharecarga = $fecharecarga;
    
        return $this;
    }

    /**
     * Get fecharecarga
     *
     * @return \DateTime
     */
    public function getFecharecarga()
    {
        return $this->fecharecarga;
    }

    /**
     * Set valorrecarga
     *
     * @param string $valorrecarga
     *
     * @return Historialpagos
     */
    public function setValorrecarga($valorrecarga)
    {
        $this->valorrecarga = $valorrecarga;
    
        return $this;
    }

    /**
     * Get valorrecarga
     *
     * @return string
     */
    public function getValorrecarga()
    {
        return $this->valorrecarga;
    }

    /**
     * Set numtransaccion
     *
     * @param string $numtransaccion
     *
     * @return Historialpagos
     */
    public function setNumtransaccion($numtransaccion)
    {
        $this->numtransaccion = $numtransaccion;
    
        return $this;
    }

    /**
     * Get numtransaccion
     *
     * @return string
     */
    public function getNumtransaccion()
    {
        return $this->numtransaccion;
    }

    /**
     * Set idregistro
     *
     * @param \Registros $idregistro
     *
     * @return Historialpagos
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
     * Set idmediopago
     *
     * @param \Mediopago $idmediopago
     *
     * @return Historialpagos
     */
    public function setIdmediopago(\Mediopago $idmediopago = null)
    {
        $this->idmediopago = $idmediopago;
    
        return $this;
    }

    /**
     * Get idmediopago
     *
     * @return \Mediopago
     */
    public function getIdmediopago()
    {
        return $this->idmediopago;
    }

    /**
     * Set idestado
     *
     * @param \Estados $idestado
     *
     * @return Historialpagos
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
