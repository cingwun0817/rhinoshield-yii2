<?php

namespace app\components;

use GuzzleHttp\Client;

/**
 * Daily sentance service.
 * 
 * @author Leo Wang <cingwun0817@gmail.com>
 * @version 1.0.0
 */
class DailySentanceService 
{
    /**
     * Get sentance by Metaphorpsum API
     */
    public function getSentance(): string
    {
        $client = new Client([
            'base_uri' => 'http://metaphorpsum.com',
            'timeout'  => 2.0
        ]);

        $response = $client->request('GET', '/sentences/3');

        if ($response->getStatusCode() != 200) {
            throw new Exception("Call /sentences/3 endpoint is failed.", 500);
        }

        $contents = $response->getBody()->getContents();

        return $contents;
    }
}