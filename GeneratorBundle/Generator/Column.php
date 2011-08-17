<?php

namespace Admingenerator\GeneratorBundle\Generator;

/**
 *
 * This class describe a column
 * @author cedric Lombardot
 *
 */
use Doctrine\Common\Util\Inflector;

class Column
{
    protected $name;
    
    protected $sort_on;
    
    protected $dbType;
    
    protected $formType;
    
    protected $formOptions = array();

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getGetter()
    {
        return Inflector::camelize($this->name);
    }

    public function getLabel()
    {
        return $this->humanize($this->getName());
    }
    
    public function isSortable()
    {
        return $this->isReal() || $this->sort_on != "";
    }
    
    public function isReal()
    {
        return true;
    }
    
    public function getSortOn()
    {
        return $this->sort_on != "" ? $this->sort_on : $this->name;
    }
    
    public function setSortOn($sort_on)
    {
        return $this->sort_on = $sort_on;
    }
    
    private function humanize($text)
    {
        return ucfirst(strtolower(str_replace('_', ' ', $text)));
    }
    
    public function setDbType($dbType)
    {
        $this->dbType = $dbType;
    }
    
    public function getDbType()
    {
        return $this->dbType;
    }
    
    public function setFormType($formType)
    {
        $this->formType = $formType;
    }
    
    public function getFormType()
    {
        return $this->formType;
    }
    
    public function setFormOptions($formOptions)
    {
        $this->formOptions = $formOptions;
    }
    
    public function getFormOptions()
    {
        return $this->formOptions;
    }
    
}