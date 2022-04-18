<?php

namespace app\components\resource;

use GuzzleHttp\Client;

/**
 * Base resource.
 * 
 * @author Leo Wang <cingwun0817@gmail.com>
 * @version 1.0.0
 */
class Resource
{
    /**
     * @var string $domain
     */
    protected $domain;

    /**
     * Send single request.
     * 
     * @param string $method
     * @param string $path
     * 
     * @return string
     */
    protected function singleRequest(string $method, string $path): string
    {
        $client = new Client([
            'base_uri' => $this->domain,
            'timeout'  => 2.0
        ]);

        $response = $client->request($method, $path);

        if ($response->getStatusCode() != 200) {
            throw new Exception("Call $path endpoint is failed.", 500);
        }

        $contents = $response->getBody()->getContents();

        return $contents;
    }
}