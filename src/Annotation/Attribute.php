<?php

namespace Dingo\Blueprint\Annotation;

/**
 * @Annotation
 */
class Attribute
{
    /**
     * @var string
     */
    public $identifier;

    /**
     * @var mixed
     */
    public $type = 'string';

    /**
     * @var bool
     */
    public $required = false;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed
     */
    public $sample;
}
