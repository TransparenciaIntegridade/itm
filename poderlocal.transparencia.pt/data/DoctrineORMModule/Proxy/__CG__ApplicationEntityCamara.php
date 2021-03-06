<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Camara extends \Application\Entity\Camara implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setContraditorio($contraditorio)
    {
        $this->__load();
        return parent::setContraditorio($contraditorio);
    }

    public function getContraditorio()
    {
        $this->__load();
        return parent::getContraditorio();
    }

    public function getIdCamara()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idCamara"];
        }
        $this->__load();
        return parent::getIdCamara();
    }

    public function setNome($nome)
    {
        $this->__load();
        return parent::setNome($nome);
    }

    public function getNome()
    {
        $this->__load();
        return parent::getNome();
    }

    public function setBrasao($brasao)
    {
        $this->__load();
        return parent::setBrasao($brasao);
    }

    public function getBrasao()
    {
        $this->__load();
        return parent::getBrasao();
    }

    public function setTaxaDesemprego($taxaDesemprego)
    {
        $this->__load();
        return parent::setTaxaDesemprego($taxaDesemprego);
    }

    public function getTaxaDesemprego()
    {
        $this->__load();
        return parent::getTaxaDesemprego();
    }

    public function setNumeroEleitores($numeroEleitores)
    {
        $this->__load();
        return parent::setNumeroEleitores($numeroEleitores);
    }

    public function getNumeroEleitores()
    {
        $this->__load();
        return parent::getNumeroEleitores();
    }

    public function setLimiteMandatos($limiteMandatos)
    {
        $this->__load();
        return parent::setLimiteMandatos($limiteMandatos);
    }

    public function getLimiteMandatos()
    {
        $this->__load();
        return parent::getLimiteMandatos();
    }

    public function setNomePresidente($nomePresidente)
    {
        $this->__load();
        return parent::setNomePresidente($nomePresidente);
    }

    public function getNomePresidente()
    {
        $this->__load();
        return parent::getNomePresidente();
    }

    public function setQualidadeVida($qualidadeVida)
    {
        $this->__load();
        return parent::setQualidadeVida($qualidadeVida);
    }

    public function getQualidadeVida()
    {
        $this->__load();
        return parent::getQualidadeVida();
    }

    public function setIdDistrito(\Application\Entity\Distrito $idDistrito = NULL)
    {
        $this->__load();
        return parent::setIdDistrito($idDistrito);
    }

    public function getIdDistrito()
    {
        $this->__load();
        return parent::getIdDistrito();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idCamara', 'nome', 'brasao', 'taxaDesemprego', 'numeroEleitores', 'limiteMandatos', 'nomePresidente', 'qualidadeVida', 'contraditorio', 'idDistrito');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}