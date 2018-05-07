<?php

namespace Proxies\__CG__\GsbFrais\ProfilBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FicheFrais extends \GsbFrais\ProfilBundle\Entity\FicheFrais implements \Doctrine\ORM\Proxy\Proxy
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
     * {@inheritDoc}
     * @param string $name
     */
    public function & __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

        return parent::__set($name, $value);
    }

    /**
     * {@inheritDoc}
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

        return parent::__isset($name);

    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'container', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'id', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'idVisiteur', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'date', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'idVisiteurDate', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'nbJustificatif', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'montantValide', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'dateModif', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'idEtat'];
        }

        return ['__isInitialized__', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'container', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'id', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'idVisiteur', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'date', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'idVisiteurDate', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'nbJustificatif', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'montantValide', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'dateModif', '' . "\0" . 'GsbFrais\\ProfilBundle\\Entity\\FicheFrais' . "\0" . 'idEtat'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FicheFrais $proxy) {
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
    public function setNbJustificatif($nbJustificatif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbJustificatif', [$nbJustificatif]);

        return parent::setNbJustificatif($nbJustificatif);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbJustificatif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbJustificatif', []);

        return parent::getNbJustificatif();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantValide($montantValide)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantValide', [$montantValide]);

        return parent::setMontantValide($montantValide);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantValide()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantValide', []);

        return parent::getMontantValide();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModif($dateModif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModif', [$dateModif]);

        return parent::setDateModif($dateModif);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModif', []);

        return parent::getDateModif();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdVisiteur(\GsbFrais\ConnexionBundle\Entity\Visiteur $idVisiteur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdVisiteur', [$idVisiteur]);

        return parent::setIdVisiteur($idVisiteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdVisiteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdVisiteur', []);

        return parent::getIdVisiteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEtat(\GsbFrais\ProfilBundle\Entity\Etat $idEtat = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEtat', [$idEtat]);

        return parent::setIdEtat($idEtat);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEtat', []);

        return parent::getIdEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdVisiteurDate($idVisiteurDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdVisiteurDate', [$idVisiteurDate]);

        return parent::setIdVisiteurDate($idVisiteurDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdVisiteurDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdVisiteurDate', []);

        return parent::getIdVisiteurDate();
    }

    /**
     * {@inheritDoc}
     */
    public function __unset($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__unset', [$key]);

        return parent::__unset($key);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

}
