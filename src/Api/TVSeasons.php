<?php

namespace Kozennnn\TmdbAPI\Api;

class TVSeasons extends Api
{

    /**
     * Get the TV season details by id.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param array $parameters
     * @return array
     */

    public function getTVSeason(int $tvId, int $seasonNumber, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/season/' . $seasonNumber, $parameters);
    }

    /**
     * Returns all of the user ratings for the season's episodes.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param array $parameters
     * @return array
     */

    public function getAccountStates(int $tvId, int $seasonNumber, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/season/' . $seasonNumber . '/account_states', $parameters);
    }

    /**
     * Get the aggregate credits for TV season.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param array $parameters
     * @return array
     */

    public function getAggregateCredits(int $tvId, int $seasonNumber, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/season/' . $seasonNumber . '/aggregate_credits', $parameters);
    }

    /**
     * Get the changes for a TV season. By default only the last 24 hours are returned.
     *
     * @param int $seasonId
     * @param array $parameters
     * @return array
     */

    public function getChanges(int $seasonId, array $parameters = []): array
    {
        return $this->get('tv/season/' . $seasonId . '/changes', $parameters);
    }

    /**
     * Get the credits for TV season.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param array $parameters
     * @return array
     */

    public function getCredits(int $tvId, int $seasonNumber, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/season/' . $seasonNumber . '/credits', $parameters);
    }

    /**
     * Get the external ids for a TV season. We currently support the following external sources.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param array $parameters
     * @return array
     */

    public function getExternalIds(int $tvId, int $seasonNumber, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/season/' . $seasonNumber . '/external_ids', $parameters);
    }

    /**
     * Get the images that belong to a TV season.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param array $parameters
     * @return array
     */

    public function getImages(int $tvId, int $seasonNumber, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/season/' . $seasonNumber . '/images', $parameters);
    }

    /**
     * Get the credits for TV season.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param array $parameters
     * @return array
     */

    public function getTranslations(int $tvId, int $seasonNumber, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/season/' . $seasonNumber . '/translations', $parameters);
    }

    /**
     * Get the videos that have been added to a TV season.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param array $parameters
     * @return array
     */

    public function getVideos(int $tvId, int $seasonNumber, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/season/' . $seasonNumber . '/videos', $parameters);
    }

}