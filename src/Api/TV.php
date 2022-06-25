<?php

namespace Kozennnn\TmdbAPI\Api;

class TV extends Api
{

    /**
     * Get the primary TV show details by id.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getTVShow(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId, $parameters);
    }

    /**
     * Grab the following account states for a session:
     * - Movie rating
     * - If it belongs to your watchlist
     * - If it belongs to your favourite list
     *
     * @param int $tvId
     * @param string $sessionId
     * @param array $parameters
     * @return array
     */

    public function getAccountStates(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/account_states', $parameters);
    }

    /**
     * Get the aggregate credits (cast and crew) that have been added to a TV show.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getAggregateCredits(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/aggregate_credits', $parameters);
    }

    /**
     * Returns all of the alternative titles for a TV show.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getAlternativeTitles(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/alternative_titles', $parameters);
    }

    /**
     * Get the changes for a TV show. By default only the last 24 hours are returned.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getChanges(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/changes', $parameters);
    }

    /**
     * Get the list of content ratings (certifications) that have been added to a TV show.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getContentRatings(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/ratings', $parameters);
    }

    /**
     * Get the credits (cast and crew) that have been added to a TV show.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getCredits(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/credits', $parameters);
    }

    /**
     * Get all of the episode groups that have been created for a TV show.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getEpisodeGroups(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/episode_groups', $parameters);
    }

    /**
     * Get the external ids for a TV show. We currently support the following external sources.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getExternalIds(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/external_ids', $parameters);
    }

    /**
     * Get the images that belong to a TV show.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getImages(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/images', $parameters);
    }

    /**
     * Get the keywords that have been added to a TV show.
     *
     * @param int $tvId
     * @return array
     */

    public function getKeywords(int $tvId): array
    {
        return $this->get('tv/' . $tvId . '/keywords');
    }

    /**
     * Get the list of TV show recommendations for this item.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getRecommendations(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/recommendations', $parameters);
    }

    /**
     * Get the reviews for a TV show.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getReviews(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/reviews', $parameters);
    }

    /**
     * Get a list of seasons or episodes that have been screened in a film festival or theatre.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getScreenedTheatrically(int $tvId): array
    {
        return $this->get('tv/' . $tvId . '/screened_theatrically');
    }

    /**
     * Get a list of similar TV shows. These items are assembled by looking at keywords and genres.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getSimilarTVShows(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/similar', $parameters);
    }

    /**
     * Get a list of the translations that exist for a TV show.
     *
     * @param int $tvId
     * @return array
     */

    public function getTranslations(int $tvId): array
    {
        return $this->get('tv/' . $tvId . '/translations');
    }

    /**
     * Get the videos that have been added to a TV show.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getVideos(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/videos', $parameters);
    }

    /**
     * Get a list of the availabilities per country by provider.
     *
     * @param int $tvId
     * @return array
     */

    public function getWatchProviders(int $tvId): array
    {
        return $this->get('tv/' . $tvId . '/watch/providers');
    }

    /**
     * Rate a TV show.
     *
     * @param int $tvId
     * @param float $rating
     * @param array $parameters
     * @return array
     */

    public function rateTVShow(int $tvId, float $rating, array $parameters): array
    {
        return $this->post('tv/' . $tvId . '/rating', ['value' => $rating], $parameters);
    }

    /**
     * Remove your rating for a TV show.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function deleteRating(int $tvId, array $parameters = []): array
    {
        return $this->delete('tv/' . $tvId . '/rating', null, $parameters);
    }

    /**
     * Get the most newly created TV show. This is a live response and will continuously change.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getLatest(int $tvId, array $parameters = []): array
    {
        return $this->get('tv/' . $tvId . '/latest', $parameters);
    }

    /**
     * Get a list of TV shows that are airing today. This query is purely day based as we do not currently support airing times.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getTVAiringToday(array $parameters = []): array
    {
        return $this->get('tv/airing_today', $parameters);
    }

    /**
     * Get a list of shows that are currently on the air.
     *
     * @param array $parameters
     * @return array
     */

    public function getTVOnTheAir(array $parameters = []): array
    {
        return $this->get('tv/on_the_air', $parameters);
    }

    /**
     * Get a list of the current popular TV shows on TMDB. This list updates daily.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getPopular(array $parameters = []): array
    {
        return $this->get('tv/popular', $parameters);
    }

    /**
     * Get a list of the top rated TV shows on TMDB.
     *
     * @param int $tvId
     * @param array $parameters
     * @return array
     */

    public function getTopRated(array $parameters = []): array
    {
        return $this->get('tv/top_rated', $parameters);
    }

}