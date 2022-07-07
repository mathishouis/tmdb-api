<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class Search extends Api
{

    /**
     * Search for companies.
     *
     * @param string $query
     * @param array $parameters
     * @return array
     */

    public function searchCompanies(string $query, array $parameters = []): array
    {
        return $this->get(3, 'search/company', array_merge($parameters, ['query' => $query]));
    }

    /**
     * Search for collections.
     *
     * @param string $query
     * @param array $parameters
     * @return array
     */

    public function searchCollections(string $query, array $parameters = []): array
    {
        return $this->get(3, 'search/collection', array_merge($parameters, ['query' => $query]));
    }

    /**
     * Search for keywords.
     *
     * @param string $query
     * @param array $parameters
     * @return array
     */

    public function searchKeywords(string $query, array $parameters = []): array
    {
        return $this->get(3, 'search/keyword', array_merge($parameters, ['query' => $query]));
    }

    /**
     * Search for movies.
     *
     * @param string $query
     * @param array $parameters
     * @return array
     */

    public function searchMovies(string $query, array $parameters = []): array
    {
        return $this->get(3, 'search/movie', array_merge($parameters, ['query' => $query]));
    }

    /**
     * Search multiple models in a single request. Multi search currently supports searching for movies,
     * tv shows and people in a single request.
     *
     * @param string $query
     * @param array $parameters
     * @return array
     */

    public function multiSearch(string $query, array $parameters = []): array
    {
        return $this->get(3, 'search/multi', array_merge($parameters, ['query' => $query]));
    }

    /**
     * Search for people.
     *
     * @param string $query
     * @param array $parameters
     * @return array
     */

    public function searchPeople(string $query, array $parameters = []): array
    {
        return $this->get(3, 'search/person', array_merge($parameters, ['query' => $query]));
    }

    /**
     * Search for a TV show.
     *
     * @param string $query
     * @param array $parameters
     * @return array
     */

    public function searchTVShows(string $query, array $parameters = []): array
    {
        return $this->get(3, 'search/tv', array_merge($parameters, ['query' => $query]));
    }
}