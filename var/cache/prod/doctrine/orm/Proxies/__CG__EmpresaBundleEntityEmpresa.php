<?php

namespace Proxies\__CG__\EmpresaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Empresa extends \EmpresaBundle\Entity\Empresa implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'id', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'nombre', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'direccion', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'cp', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'telefono1', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'telefono2', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'fechaCreacion', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'alumno'];
        }

        return ['__isInitialized__', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'id', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'nombre', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'direccion', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'cp', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'telefono1', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'telefono2', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'fechaCreacion', '' . "\0" . 'EmpresaBundle\\Entity\\Empresa' . "\0" . 'alumno'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Empresa $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', [$direccion]);

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp($cp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', [$cp]);

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', []);

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono1($telefono1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono1', [$telefono1]);

        return parent::setTelefono1($telefono1);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono1', []);

        return parent::getTelefono1();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono2($telefono2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono2', [$telefono2]);

        return parent::setTelefono2($telefono2);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono2', []);

        return parent::getTelefono2();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCreacion($fechaCreacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCreacion', [$fechaCreacion]);

        return parent::setFechaCreacion($fechaCreacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCreacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCreacion', []);

        return parent::getFechaCreacion();
    }

}
