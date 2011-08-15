<?php

namespace Admingenerator\GeneratorBundle\Builder\Admin;

use Admingenerator\GeneratorBundle\Generator\Action;

use Admingenerator\GeneratorBundle\Generator\Column;

use Admingenerator\GeneratorBundle\Builder\BaseBuilder;

/**
 * This builder generate php for edit actions
 * @author cedric Lombardot
 */
class EditBuilder extends BaseBuilder
{
    /**
     * (non-PHPdoc)
     * @see Builder/Admingenerator\GeneratorBundle\Builder.BaseBuilder::getYamlKey()
     */
    public function getYamlKey()
    {
        return 'edit';
    }

}