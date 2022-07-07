<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class Discover extends Api
{

    /**
     * Discover movies by different types of data like average rating, number of votes, genres and certifications.
     *
     * @param array $parameters
     * @return array
     */

    public function movieDiscover(array $parameters = []): array
    {
        return $this->get(3, 'discover/movie', $parameters);
    }

    /**
     * Discover TV shows by different types of data like average rating, number of votes, genres, the network they aired on and air dates.
     *
     * @param array $parameters
     * @return array
     */

    public function tvDiscover(array $parameters = []): array
    {
        return $this->get(3, 'discover/tv', $parameters);
    }


}