<?php

namespace Kozennnn\TmdbAPI\Api;

class Movies extends Api
{

    /**
     * Get movie information of the specified movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getMovie(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId, $parameters);
    }

    /**
     * Grab the following account states for a session:
     * - Movie rating
     * - If it belongs to your watchlist
     * - If it belongs to your favourite list
     *
     * @param int $movieId
     * @param string $sessionId
     * @param array $parameters
     * @return array
     */

    public function getAccountStates(int $movieId, string $sessionId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/account_states?session_id=' . $sessionId . "&", $parameters);
    }

    /**
     * Get all of the alternative titles for a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getAlternativeTitles(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/alternative_titles', $parameters);
    }

    /**
     * Get the changes for a movie. By default only the last 24 hours are returned.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getChanges(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/changes', $parameters);
    }

    /**
     * Get the cast and crew for a movie.
     *
     * @param int $movieId
     * @param array $parameters
     * @return array
     */

    public function getCredits(int $movieId, array $parameters = []): array
    {
        return $this->get('movie/' . $movieId . '/credits', $parameters);
    }



}