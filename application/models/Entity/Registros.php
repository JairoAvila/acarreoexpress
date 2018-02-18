<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Registros
 *
 * @ORM\Table(name="registros", indexes={@ORM\Index(name="idpais", columns={"idpais"}), @ORM\Index(name="idtipoidentificacion", columns={"idtipoidentificacion"}), @ORM\Index(name="idlugarexpedicion", columns={"idlugarexpedicion"}), @ORM\Index(name="idciudad", columns={"idciudad"}), @ORM\Index(name="idestadoregistro", columns={"idestadoregistro"}), @ORM\Index(name="idrol", columns={"idrol"}), @ORM\Index(name="idusuario", columns={"idusuario"})})
 * @ORM\Entity
 */
class Registros
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
     * @ORM\Column(name="nombres", type="string", length=50, nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=50, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="identificacion", type="string", length=50, nullable=false)
     */
    private $identificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nacimiento", type="string", length=50, nullable=false)
     */
    private $nacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=50, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="pathimage", type="string", length=100, nullable=false)
     */
    private $pathimage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=false)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="billetera", type="integer", nullable=false)
     */
    private $billetera;

    /**
     * @var \Paises
     *
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpais", referencedColumnName="id")
     * })
     */
    private $idpais;

    /**
     * @var \Tipoidentificacion
     *
     * @ORM\ManyToOne(targetEntity="Tipoidentificacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipoidentificacion", referencedColumnName="id")
     * })
     */
    private $idtipoidentificacion;

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idlugarexpedicion", referencedColumnName="id")
     * })
     */
    private $idlugarexpedicion;

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idciudad", referencedColumnName="id")
     * })
     */
    private $idciudad;

    /**
     * @var \Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestadoregistro", referencedColumnName="id")
     * })
     */
    private $idestadoregistro;

    /**
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrol", referencedColumnName="id")
     * })
     */
    private $idrol;

    /**
     * @var \Usuarios
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
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Registros
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Registros
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set identificacion
     *
     * @param string $identificacion
     *
     * @return Registros
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    
        return $this;
    }

    /**
     * Get identificacion
     *
     * @return string
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set nacimiento
     *
     * @param string $nacimiento
     *
     * @return Registros
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    
        return $this;
    }

    /**
     * Get nacimiento
     *
     * @return string
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Registros
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Registros
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set pathimage
     *
     * @param string $pathimage
     *
     * @return Registros
     */
    public function setPathimage($pathimage)
    {
        $this->pathimage = $pathimage;
    
        return $this;
    }

    /**
     * Get pathimage
     *
     * @return string
     */
    public function getPathimage()
    {
        return $this->pathimage;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Registros
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
     * @return Registros
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
     * Set billetera
     *
     * @param integer $billetera
     *
     * @return Registros
     */
    public function setBilletera($billetera)
    {
        $this->billetera = $billetera;
    
        return $this;
    }

    /**
     * Get billetera
     *
     * @return integer
     */
    public function getBilletera()
    {
        return $this->billetera;
    }

    /**
     * Set idpais
     *
     * @param \Paises $idpais
     *
     * @return Registros
     */
    public function setIdpais(\Paises $idpais = null)
    {
        $this->idpais = $idpais;
    
        return $this;
    }

    /**
     * Get idpais
     *
     * @return \Paises
     */
    public function getIdpais()
    {
        return $this->idpais;
    }

    /**
     * Set idtipoidentificacion
     *
     * @param \Tipoidentificacion $idtipoidentificacion
     *
     * @return Registros
     */
    public function setIdtipoidentificacion(\Tipoidentificacion $idtipoidentificacion = null)
    {
        $this->idtipoidentificacion = $idtipoidentificacion;
    
        return $this;
    }

    /**
     * Get idtipoidentificacion
     *
     * @return \Tipoidentificacion
     */
    public function getIdtipoidentificacion()
    {
        return $this->idtipoidentificacion;
    }

    /**
     * Set idlugarexpedicion
     *
     * @param \Ciudades $idlugarexpedicion
     *
     * @return Registros
     */
    public function setIdlugarexpedicion(\Ciudades $idlugarexpedicion = null)
    {
        $this->idlugarexpedicion = $idlugarexpedicion;
    
        return $this;
    }

    /**
     * Get idlugarexpedicion
     *
     * @return \Ciudades
     */
    public function getIdlugarexpedicion()
    {
        return $this->idlugarexpedicion;
    }

    /**
     * Set idciudad
     *
     * @param \Ciudades $idciudad
     *
     * @return Registros
     */
    public function setIdciudad(\Ciudades $idciudad = null)
    {
        $this->idciudad = $idciudad;
    
        return $this;
    }

    /**
     * Get idciudad
     *
     * @return \Ciudades
     */
    public function getIdciudad()
    {
        return $this->idciudad;
    }

    /**
     * Set idestadoregistro
     *
     * @param \Estados $idestadoregistro
     *
     * @return Registros
     */
    public function setIdestadoregistro(\Estados $idestadoregistro = null)
    {
        $this->idestadoregistro = $idestadoregistro;
    
        return $this;
    }

    /**
     * Get idestadoregistro
     *
     * @return \Estados
     */
    public function getIdestadoregistro()
    {
        return $this->idestadoregistro;
    }

    /**
     * Set idrol
     *
     * @param \Roles $idrol
     *
     * @return Registros
     */
    public function setIdrol(\Roles $idrol = null)
    {
        $this->idrol = $idrol;
    
        return $this;
    }

    /**
     * Get idrol
     *
     * @return \Roles
     */
    public function getIdrol()
    {
        return $this->idrol;
    }

    /**
     * Set idusuario
     *
     * @param \Usuarios $idusuario
     *
     * @return Registros
     */
    public function setIdusuario(\Usuarios $idusuario = null)
    {
        $this->idusuario = $idusuario;
    
        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \Usuarios
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}
