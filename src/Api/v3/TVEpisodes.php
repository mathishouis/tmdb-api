<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class TVEpisodes extends Api
{

    /**
     * Get the TV episode details by id.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param int $episodeNumber
     * @param array $parameters
     * @return array
     */

    public function getTVEpisode(int $tvId, int $seasonNumber, int $episodeNumber, array $parameters = []): array
    {
        return $this->get(3, 'tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber, $parameters);
    }

    /**
     * Get your rating for a episode.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param int $episodeNumber
     * @param array $parameters
     * @return array
     */

    public function getAccountStates(int $tvId, int $seasonNumber, int $episodeNumber, array $parameters = []): array
    {
        return $this->get(3, 'tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber . '/account_states', $parameters);
    }

    /**
     * Get the changes for a TV episode. By default only the last 24 hours are returned.
     *
     * @param int $episodeId
     * @param array $parameters
     * @return array
     */

    public function getChanges(int $episodeId, array $parameters = []): array
    {
        return $this->get(3, 'tv/episode/' . $episodeId . '/changes', $parameters);
    }

    /**
     * Get the credits (cast, crew and guest stars) for a TV episode.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param int $episodeNumber
     * @param array $parameters
     * @return array
     */

    public function getCredits(int $tvId, int $seasonNumber, int $episodeNumber, array $parameters = []): array
    {
        return $this->get(3, 'tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber . '/credits', $parameters);
    }

    /**
     * Get the external ids for a TV episode. We currently support the following external sources.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param int $episodeNumber
     * @return array
     */

    public function getExternalIds(int $tvId, int $seasonNumber, int $episodeNumber): array
    {
        return $this->get(3, 'tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber . '/external_ids');
    }

    /**
     * Get the images that belong to a TV episode.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param int $episodeNumber
     * @return array
     */

    public function getImages(int $tvId, int $seasonNumber, int $episodeNumber): array
    {
        return $this->get(3, 'tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber . '/images');
    }

    /**
     * Get the translation data for an episode.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param int $episodeNumber
     * @return array
     */

    public function getTranslations(int $tvId, int $seasonNumber, int $episodeNumber): array
    {
        return $this->get(3, 'tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber . '/translations');
    }

    /**
     * Rate a TV episode.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param int $episodeNumber
     * @param float $rating
     * @param array $parameters
     * @return array
     */

    public function rateTVEpisode(int $tvId, int $seasonNumber, int $episodeNumber, float $rating, array $parameters = []): array
    {
        return $this->post(3, 'tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber . '/rating', ['value' => $rating], $parameters);
    }

    /**
     * Remove your rating for a TV episode.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param int $episodeNumber
     * @param float $rating
     * @param array $parameters
     * @return array
     */

    public function deleteRating(int $tvId, int $seasonNumber, int $episodeNumber, float $rating, array $parameters = []): array
    {
        return $this->delete(3, 'tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber . '/rating', null, $parameters);
    }

    /**
     * Get the videos that have been added to a TV episode.
     *
     * @param int $tvId
     * @param int $seasonNumber
     * @param int $episodeNumber
     * @return array
     */

    public function getVideos(int $tvId, int $seasonNumber, int $episodeNumber): array
    {
        return $this->get(3, 'tv/' . $tvId . '/season/' . $seasonNumber . '/episode/' . $episodeNumber . '/videos');
    }

}