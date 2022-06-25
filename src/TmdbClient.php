<?php

namespace Kozennnn\TmdbAPI;

use Kozennnn\TmdbAPI\Api\Movies;
use Kozennnn\TmdbAPI\Api\Networks;
use Kozennnn\TmdbAPI\Api\People;
use Kozennnn\TmdbAPI\Api\Reviews;
use Kozennnn\TmdbAPI\Api\Search;
use Kozennnn\TmdbAPI\Api\Trending;
use Kozennnn\TmdbAPI\Api\TV;
use Kozennnn\TmdbAPI\Api\TVEpisodeGroups;
use Kozennnn\TmdbAPI\Api\TVEpisodes;
use Kozennnn\TmdbAPI\Api\TVSeasons;

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

    public function Search(): Search {
        return new Search($this);
    }

    public function TV(): TV {
        return new TV($this);
    }

    public function TVSeasons(): TVSeasons {
        return new TVSeasons($this);
    }

    public function TVEpisodes(): TVEpisodes {
        return new TVEpisodes($this);
    }

    public function TVEpisodeGroup(): TVEpisodeGroups {
        return new TVEpisodeGroups($this);
    }

}