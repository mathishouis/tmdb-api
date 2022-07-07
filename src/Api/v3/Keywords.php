<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class Keywords extends Api
{

    /**
     * @param int $keywordId
     * @return array
     */

    public function getKeyword(int $keywordId): array
    {
        return $this->get(3, 'keyword/' . $keywordId);
    }

    /**
     * Get the movies that belong to a keyword.
     *
     * @param int $keywordId
     * @param array $parameters
     * @return array
     */

    public function getMovies(int $keywordId, array $parameters = []): array
    {
        return $this->get(3, 'keyword/' . $keywordId . '/movies', $parameters);
    }

}