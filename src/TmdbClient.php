<?php

namespace Kozennnn\TmdbAPI;

use Kozennnn\TmdbAPI\Api\Movies;
use Kozennnn\TmdbAPI\Api\Networks;

class TmdbClient {

    public const API_VERSION = '3';
    public const API_URL = 'http://api.themoviedb.org/' . self::API_VERSION . '/';

    /**
     * Store the API Key
     *
     * @var string
     */

    private $apiKey;

    /**
     * TMDBClient constructor.
     * @param string $apiKey
     */

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Return the API Key
     *
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function Movies(): Movies {
        return new Movies($this);
    }

    public function Networks(): Networks {
        return new Networks($this);
    }

}