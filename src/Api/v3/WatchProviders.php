<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class WatchProviders extends Api
{

    /**
     * Returns a list of all of the countries we have watch provider (OTT/streaming) data for.
     *
     * @param int $episodeGroupId
     * @param array $parameters
     * @return array
     */

    public function getAvailableRegions(int $episodeGroupId, array $parameters = []): array
    {
        return $this->get(3, 'watch/providers/regions', $parameters);
    }

    /**
     * Returns a list of the watch provider (OTT/streaming) data we have available for movies.
     *
     * @param int $episodeGroupId
     * @param array $parameters
     * @return array
     */

    public function getMovieProviders(int $episodeGroupId, array $parameters = []): array
    {
        return $this->get(3, 'watch/providers/movie', $parameters);
    }

    /**
     * Returns a list of the watch provider (OTT/streaming) data we have available for TV series.
     *
     * @param int $episodeGroupId
     * @param array $parameters
     * @return array
     */

    public function getTVProviders(int $episodeGroupId, array $parameters = []): array
    {
        return $this->get(3, 'watch/providers/tv', $parameters);
    }

}