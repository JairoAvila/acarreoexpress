<?php


namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Precioreserva
 *
 * @ORM\Table(name="precioreserva", indexes={@ORM\Index(name="idreserva", columns={"idreserva"}), @ORM\Index(name="idtamano", columns={"idtamano"}), @ORM\Index(name="idsubcategoria", columns={"idsubcategoria"}), @ORM\Index(name="idayudantes", columns={"idayudantes"})})
 * @ORM\Entity
 */
class Precioreserva
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
     * @ORM\Column(name="embajale", type="string", length=50, nullable=false)
     */
    private $embajale;

    /**
     * @var float
     *
     * @ORM\Column(name="distancia", type="float", precision=10, scale=0, nullable=false)
     */
    private $distancia;

    /**
     * @var integer
     *
     * @ORM\Column(name="seguro", type="integer", nullable=false)
     */
    private $seguro;

    /**
     * @var integer
     *
     * @ORM\Column(name="porcentaje", type="integer", nullable=false)
     */
    private $porcentaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var Reservas
     *
     * @ORM\ManyToOne(targetEntity="Reservas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idreserva", referencedColumnName="id")
     * })
     */
    private $idreserva;

    /**
     * @var Tamanocasa
     *
     * @ORM\ManyToOne(targetEntity="Tamanocasa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtamano", referencedColumnName="id")
     * })
     */
    private $idtamano;

    /**
     * @var Subcategoria
     *
     * @ORM\ManyToOne(targetEntity="Subcategoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsubcategoria", referencedColumnName="id")
     * })
     */
    private $idsubcategoria;

    /**
     * @var Ayudantes
     *
     * @ORM\ManyToOne(targetEntity="Ayudantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idayudantes", referencedColumnName="id")
     * })
     */
    private $idayudantes;



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
     * Set embajale
     *
     * @param string $embajale
     *
     * @return Precioreserva
     */
    public function setEmbajale($embajale)
    {
        $this->embajale = $embajale;
    
        return $this;
    }

    /**
     * Get embajale
     *
     * @return string
     */
    public function getEmbajale()
    {
        return $this->embajale;
    }

    /**
     * Set distancia
     *
     * @param float $distancia
     *
     * @return Precioreserva
     */
    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;
    
        return $this;
    }

    /**
     * Get distancia
     *
     * @return float
     */
    public function getDistancia()
    {
        return $this->distancia;
    }

    /**
     * Set seguro
     *
     * @param integer $seguro
     *
     * @return Precioreserva
     */
    public function setSeguro($seguro)
    {
        $this->seguro = $seguro;
    
        return $this;
    }

    /**
     * Get seguro
     *
     * @return integer
     */
    public function getSeguro()
    {
        return $this->seguro;
    }

    /**
     * Set porcentaje
     *
     * @param integer $porcentaje
     *
     * @return Precioreserva
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;
    
        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return integer
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return Precioreserva
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set idreserva
     *
     * @param Reservas $idreserva
     *
     * @return Precioreserva
     */
    public function setIdreserva(Reservas $idreserva = null)
    {
        $this->idreserva = $idreserva;
    
        return $this;
    }

    /**
     * Get idreserva
     *
     * @return Reservas
     */
    public function getIdreserva()
    {
        return $this->idreserva;
    }

    /**
     * Set idtamano
     *
     * @param Tamanocasa $idtamano
     *
     * @return Precioreserva
     */
    public function setIdtamano(Tamanocasa $idtamano = null)
    {
        $this->idtamano = $idtamano;
    
        return $this;
    }

    /**
     * Get idtamano
     *
     * @return Tamanocasa
     */
    public function getIdtamano()
    {
        return $this->idtamano;
    }

    /**
     * Set idsubcategoria
     *
     * @param Subcategoria $idsubcategoria
     *
     * @return Precioreserva
     */
    public function setIdsubcategoria(Subcategoria $idsubcategoria = null)
    {
        $this->idsubcategoria = $idsubcategoria;
    
        return $this;
    }

    /**
     * Get idsubcategoria
     *
     * @return Subcategoria
     */
    public function getIdsubcategoria()
    {
        return $this->idsubcategoria;
    }

    /**
     * Set idayudantes
     *
     * @param Ayudantes $idayudantes
     *
     * @return Precioreserva
     */
    public function setIdayudantes(Ayudantes $idayudantes = null)
    {
        $this->idayudantes = $idayudantes;
    
        return $this;
    }

    /**
     * Get idayudantes
     *
     * @return Ayudantes
     */
    public function getIdayudantes()
    {
        return $this->idayudantes;
    }
}
