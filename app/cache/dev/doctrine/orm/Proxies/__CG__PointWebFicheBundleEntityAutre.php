<?php

namespace Proxies\__CG__\PointWeb\FicheBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Autre extends \PointWeb\FicheBundle\Entity\Autre implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'frais', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'id', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'commercial', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'debutDate', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'finDate', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'creationDate', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'justificatif');
        }

        return array('__isInitialized__', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'frais', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'id', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'commercial', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'debutDate', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'finDate', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'creationDate', '' . "\0" . 'PointWeb\\FicheBundle\\Entity\\Autre' . "\0" . 'justificatif');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Autre $proxy) {
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
    public function setCommercial($commercial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommercial', array($commercial));

        return parent::setCommercial($commercial);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommercial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommercial', array());

        return parent::getCommercial();
    }

    /**
     * {@inheritDoc}
     */
    public function setDebutDate($debutDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDebutDate', array($debutDate));

        return parent::setDebutDate($debutDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDebutDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDebutDate', array());

        return parent::getDebutDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinDate($finDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinDate', array($finDate));

        return parent::setFinDate($finDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinDate', array());

        return parent::getFinDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationDate($creationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationDate', array($creationDate));

        return parent::setCreationDate($creationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationDate', array());

        return parent::getCreationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setJustificatif($justificatif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJustificatif', array($justificatif));

        return parent::setJustificatif($justificatif);
    }

    /**
     * {@inheritDoc}
     */
    public function getJustificatif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJustificatif', array());

        return parent::getJustificatif();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevis(\PointWeb\FicheBundle\Entity\Frais $frais = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevis', array($frais));

        return parent::setDevis($frais);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrais()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrais', array());

        return parent::getFrais();
    }

}
