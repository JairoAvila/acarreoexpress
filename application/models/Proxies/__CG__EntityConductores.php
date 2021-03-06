<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Conductores extends \Entity\Conductores implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Entity\\Conductores' . "\0" . 'id', '' . "\0" . 'Entity\\Conductores' . "\0" . 'numerolicencia', '' . "\0" . 'Entity\\Conductores' . "\0" . 'expidelicencia', '' . "\0" . 'Entity\\Conductores' . "\0" . 'vencimientolicencia', '' . "\0" . 'Entity\\Conductores' . "\0" . 'idregistro', '' . "\0" . 'Entity\\Conductores' . "\0" . 'idvehiculo', '' . "\0" . 'Entity\\Conductores' . "\0" . 'idempresa');
        }

        return array('__isInitialized__', '' . "\0" . 'Entity\\Conductores' . "\0" . 'id', '' . "\0" . 'Entity\\Conductores' . "\0" . 'numerolicencia', '' . "\0" . 'Entity\\Conductores' . "\0" . 'expidelicencia', '' . "\0" . 'Entity\\Conductores' . "\0" . 'vencimientolicencia', '' . "\0" . 'Entity\\Conductores' . "\0" . 'idregistro', '' . "\0" . 'Entity\\Conductores' . "\0" . 'idvehiculo', '' . "\0" . 'Entity\\Conductores' . "\0" . 'idempresa');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Conductores $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumerolicencia($numerolicencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumerolicencia', array($numerolicencia));

        return parent::setNumerolicencia($numerolicencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumerolicencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumerolicencia', array());

        return parent::getNumerolicencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpidelicencia($expidelicencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpidelicencia', array($expidelicencia));

        return parent::setExpidelicencia($expidelicencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpidelicencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpidelicencia', array());

        return parent::getExpidelicencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setVencimientolicencia($vencimientolicencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVencimientolicencia', array($vencimientolicencia));

        return parent::setVencimientolicencia($vencimientolicencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getVencimientolicencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVencimientolicencia', array());

        return parent::getVencimientolicencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdregistro(\Entity\Registros $idregistro = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdregistro', array($idregistro));

        return parent::setIdregistro($idregistro);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdregistro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdregistro', array());

        return parent::getIdregistro();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdvehiculo(\Entity\Vehiculos $idvehiculo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdvehiculo', array($idvehiculo));

        return parent::setIdvehiculo($idvehiculo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdvehiculo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdvehiculo', array());

        return parent::getIdvehiculo();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdempresa(\Entity\Empresa $idempresa = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdempresa', array($idempresa));

        return parent::setIdempresa($idempresa);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdempresa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdempresa', array());

        return parent::getIdempresa();
    }

}
