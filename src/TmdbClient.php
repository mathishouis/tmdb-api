<?php

namespace Kozennnn\TmdbAPI;

use Kozennnn\TmdbAPI\Api\Discover;
use Kozennnn\TmdbAPI\Api\Genres;
use Kozennnn\TmdbAPI\Api\Keywords;
use Kozennnn\TmdbAPI\Api\Lists;
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
use Kozennnn\TmdbAPI\Api\WatchProviders;
use phpDocumentor\Reflection\Types\Boolean;

class TmdbClient {

    public const API_VERSION = '3';
    public const API_URL = '//api.themoviedb.org/' . self::API_VERSION . '/';
    public const SCHEME_INSECURE = 'http';
    public const SCHEME_SECURE = 'https';

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

    public function __construct(string $apiKey, boolean $secure)
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

    public function isSecure(): Boolean
    {
        return $this->secure;
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

    public function WatchProviders(): WatchProviders {
        return new WatchProviders($this);
    }

    public function Lists(): Lists {
        return new Lists($this);
    }

    public function Keywords(): Keywords {
        return new Keywords($this);
    }

    public function Genres(): Genres {
        return new Genres($this);
    }

    public function Discover(): Discover {
        return new Discover($this);
    }

}