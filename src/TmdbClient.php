<?php

namespace Kozennnn\TmdbAPI;

use Kozennnn\TmdbAPI\Api\Movies;
use Kozennnn\TmdbAPI\Api\Networks;
use Kozennnn\TmdbAPI\Api\People;
use Kozennnn\TmdbAPI\Api\Reviews;
use Kozennnn\TmdbAPI\Api\Trending;

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

    public function Trending(): Trending {
        return new Trending($this);
    }

    public function People(): People {
        return new People($this);
    }

    public function Reviews(): Reviews {
        return new Reviews($this);
    }

}