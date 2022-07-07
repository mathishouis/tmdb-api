<?php

namespace Kozennnn\TmdbAPI;

use Kozennnn\TmdbAPI\Api\v3\Discover;
use Kozennnn\TmdbAPI\Api\v3\Genres;
use Kozennnn\TmdbAPI\Api\v3\Keywords;
use Kozennnn\TmdbAPI\Api\v3\Lists;
use Kozennnn\TmdbAPI\Api\v3\Movies;
use Kozennnn\TmdbAPI\Api\v3\Networks;
use Kozennnn\TmdbAPI\Api\v3\People;
use Kozennnn\TmdbAPI\Api\v3\Reviews;
use Kozennnn\TmdbAPI\Api\v3\Search;
use Kozennnn\TmdbAPI\Api\v3\Trending;
use Kozennnn\TmdbAPI\Api\v3\TV;
use Kozennnn\TmdbAPI\Api\v3\TVEpisodeGroups;
use Kozennnn\TmdbAPI\Api\v3\TVEpisodes;
use Kozennnn\TmdbAPI\Api\v3\TVSeasons;
use Kozennnn\TmdbAPI\Api\v3\WatchProviders;
use Kozennnn\TmdbAPI\Methods\v3\ApiMethods;

class TmdbClient {

    public const API_URL = '://api.themoviedb.org/';
    public const SCHEME_INSECURE = 'http';
    public const SCHEME_SECURE = 'https';

    /**
     * Store the API Key
     *
     * @var string
     */

    private $apiKey;
    private $secure;

    /**
     * TMDBClient constructor.
     * @param string $apiKey
     * @param bool $secure
     */

    public function __construct(string $apiKey, bool $secure)
    {

        $this->apiKey = $apiKey;
        $this->secure = $secure;

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

    public function isSecure(): bool
    {
        return $this->secure;
    }

    public function v3(): ApiMethods {
        return new ApiMethods($this);
    }

    public function v4(): Methods\v4\ApiMethods
    {
        return new \Kozennnn\TmdbAPI\Methods\v4\ApiMethods($this);
    }

}