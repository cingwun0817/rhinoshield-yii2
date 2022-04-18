<?php

namespace app\components\resource;

/**
 * Itsthisforthat sentence resource.
 * 
 * @author Leo Wang <cingwun0817@gmail.com>
 * @version 1.0.0
 */
class Itsthisforthat extends Resource implements ResourceInterface
{
    /**
     * __construct.
     */
    public function __construct()
    {
        $this->domain = 'https://itsthisforthat.com';
    }

    /**
     * Get word.
     * 
     * @return string
     */
    public function getWord(): string
    {
        $result = $this->singleRequest('GET', '/api.php?text');

        return $result;
    }
}