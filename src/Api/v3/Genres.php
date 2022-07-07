<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class Genres extends Api
{
    /**
     * Get the list of official genres for movies.
     *
     * @param array $parameters
     * @return array
     */

    public function getMovieList(array $parameters): array
    {
        return $this->get(3, 'genre/movie/list', $parameters);
    }

    /**
     * Get the list of official genres for TV shows.
     *
     * @param array $parameters
     * @return array
     */

    public function getTVList(array $parameters): array
    {
        return $this->get(3, 'genre/tv/list', $parameters);
    }

}