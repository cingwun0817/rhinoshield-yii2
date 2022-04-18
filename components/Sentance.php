<?php

namespace app\components;

use app\components\resource\{Itsthisforthat, Metaphorpsum};
use app\components\resource\ResourceInterface;
use Exception;

/**
 * Sentance service.
 * 
 * @author Leo Wang <cingwun0817@gmail.com>
 * @version 1.0.0
 */
class Sentance
{
    /**
     * Get word by type.
     * 
     * @param string $type
     * 
     * @return string
     */
    public function getWord(string $type): string
    {
        $resourceObject = NULL;

        switch ($type) {
            case 'Metaphorpsum':
                $resourceObject = new Metaphorpsum;
                    
                break;
            case 'Itsthisforthat':
                $resourceObject = new Itsthisforthat;

                break;
        }

        if (!($resourceObject instanceof ResourceInterface)) {
            $clsName = get_class($resourceObject);

            throw new Exception("The $clsName object class is not implement ResourceInterface interface.", 500);
        }

        $result = $resourceObject->getWord();
        
        return $result;
    }
}