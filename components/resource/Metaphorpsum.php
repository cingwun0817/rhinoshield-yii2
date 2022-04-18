<?php

namespace app\components\resource;

/**
 * Metaphorpsum sentence resource.
 * 
 * @author Leo Wang <cingwun0817@gmail.com>
 * @version 1.0.0
 */
class Metaphorpsum extends Resource implements ResourceInterface
{
    /**
     * __construct.
     */
    public function __construct()
    {
        $this->domain = 'http://metaphorpsum.com';
    }

    /**
     * Get word.
     * 
     * @return string
     */
    public function getWord(): string
    {
        $result = $this->singleRequest('GET', '/sentences/3');

        return $result;
    }
}