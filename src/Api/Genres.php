<?php

namespace Kozennnn\TmdbAPI\Api;

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
        return $this->get('genre/movie/list', $parameters);
    }

    /**
     * Get the list of official genres for TV shows.
     *
     * @param array $parameters
     * @return array
     */

    public function getTVList(array $parameters): array
    {
        return $this->get('genre/tv/list', $parameters);
    }

}