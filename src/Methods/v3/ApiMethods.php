<?php


namespace Kozennnn\TmdbAPI\Methods\v3;


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
use Kozennnn\TmdbAPI\TmdbClient;

class ApiMethods
{
    private $client;

    public function __construct(TmdbClient $client) {
        $this->client = $client;
    }

    public function Movies(): Movies {
        return new Movies($this->client);
    }

    public function Networks(): Networks {
        return new Networks($this->client);
    }

    public function Trending(): Trending {
        return new Trending($this->client);
    }

    public function People(): People {
        return new People($this->client);
    }

    public function Reviews(): Reviews {
        return new Reviews($this->client);
    }

    public function Search(): Search {
        return new Search($this->client);
    }

    public function TV(): TV {
        return new TV($this->client);
    }

    public function TVSeasons(): TVSeasons {
        return new TVSeasons($this->client);
    }

    public function TVEpisodes(): TVEpisodes {
        return new TVEpisodes($this->client);
    }

    public function TVEpisodeGroup(): TVEpisodeGroups {
        return new TVEpisodeGroups($this->client);
    }

    public function WatchProviders(): WatchProviders {
        return new WatchProviders($this->client);
    }

    public function Lists(): Lists
    {
        return new Lists($this->client);
    }

    public function Keywords(): Keywords {
        return new Keywords($this->client);
    }

    public function Genres(): Genres {
        return new Genres($this->client);
    }

    public function Discover(): Discover {
        return new Discover($this->client);
    }
}