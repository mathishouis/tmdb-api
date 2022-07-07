<?php


namespace Kozennnn\TmdbAPI\Methods\v4;


use Kozennnn\TmdbAPI\Api\v4\Lists;
use Kozennnn\TmdbAPI\TmdbClient;

class ApiMethods
{
    private $client;

    public function __construct(TmdbClient $client) {
        $this->client = $client;
    }

    public function Lists(): Lists
    {
        return new Lists($this->client);
    }

}