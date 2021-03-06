<?php

namespace Proxies\__CG__\Cocorico\GeoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class City extends \Cocorico\GeoBundle\Entity\City implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'id', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'country', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'area', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'department', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'coordinates', 'translations', 'newTranslations', 'currentLocale', 'defaultLocale', 'geocoding'];
        }

        return ['__isInitialized__', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'id', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'country', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'area', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'department', '' . "\0" . 'Cocorico\\GeoBundle\\Entity\\City' . "\0" . 'coordinates', 'translations', 'newTranslations', 'currentLocale', 'defaultLocale', 'geocoding'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (City $proxy) {
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
    public function __call($method, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$method, $arguments]);

        return parent::__call($method, $arguments);
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
    public function setCountry(\Cocorico\GeoBundle\Entity\Country $country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function addCoordinate(\Cocorico\GeoBundle\Entity\Coordinate $coordinate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCoordinate', [$coordinate]);

        return parent::addCoordinate($coordinate);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCoordinate(\Cocorico\GeoBundle\Entity\Coordinate $coordinate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCoordinate', [$coordinate]);

        return parent::removeCoordinate($coordinate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoordinates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoordinates', []);

        return parent::getCoordinates();
    }

    /**
     * {@inheritDoc}
     */
    public function setArea(\Cocorico\GeoBundle\Entity\Area $area)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArea', [$area]);

        return parent::setArea($area);
    }

    /**
     * {@inheritDoc}
     */
    public function getArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArea', []);

        return parent::getArea();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartment(\Cocorico\GeoBundle\Entity\Department $department)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartment', [$department]);

        return parent::setDepartment($department);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartment', []);

        return parent::getDepartment();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function getNewTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewTranslations', []);

        return parent::getNewTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation($translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translation]);

        return parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation($translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', [$translation]);

        return parent::removeTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function translate($locale = NULL, $fallbackToDefault = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'translate', [$locale, $fallbackToDefault]);

        return parent::translate($locale, $fallbackToDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function mergeNewTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'mergeNewTranslations', []);

        return parent::mergeNewTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentLocale', [$locale]);

        return parent::setCurrentLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentLocale', []);

        return parent::getCurrentLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLocale', [$locale]);

        return parent::setDefaultLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLocale', []);

        return parent::getDefaultLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function getGeocoding()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeocoding', []);

        return parent::getGeocoding();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeocoding($geocoding)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeocoding', [$geocoding]);

        return parent::setGeocoding($geocoding);
    }

}
