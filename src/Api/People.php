<?php

namespace Kozennnn\TmdbAPI\Api;

class People extends Api
{

    /**
     * Get the primary person details by id.
     *
     * @param int $personId
     * @param array $parameters
     * @return array
     */

    public function getPerson(int $personId, array $parameters = []): array
    {
        return $this->get('person/' . $personId, $parameters);
    }

    /**
     * Get the changes for a person. By default only the last 24 hours are returned.
     *
     * @param int $personId
     * @param array $parameters
     * @return array
     */

    public function getChanges(int $personId, array $parameters = []): array
    {
        return $this->get('person/' . $personId . '/changes', $parameters);
    }

    /**
     * Get the movie credits for a person.
     *
     * @param int $personId
     * @param array $parameters
     * @return array
     */

    public function getMovieCredits(int $personId, array $parameters = []): array
    {
        return $this->get('person/' . $personId . '/movie_credits', $parameters);
    }

    /**
     * Get the TV show credits for a person.
     *
     * @param int $personId
     * @param array $parameters
     * @return array
     */

    public function getTVCredits(int $personId, array $parameters = []): array
    {
        return $this->get('person/' . $personId . '/tv_credits', $parameters);
    }

    /**
     * Get the movie and TV credits together in a single response.
     *
     * @param int $personId
     * @param array $parameters
     * @return array
     */

    public function getCombinedCredits(int $personId, array $parameters = []): array
    {
        return $this->get('person/' . $personId . '/combined_credits', $parameters);
    }

    /**
     * Get the external ids for a person. We currently support the following external sources.
     *
     * @param int $personId
     * @param array $parameters
     * @return array
     */

    public function getExternalsIds(int $personId, array $parameters = []): array
    {
        return $this->get('person/' . $personId . '/external_ids', $parameters);
    }

    /**
     * Get the images for a person.
     *
     * @param int $personId
     * @return array
     */

    public function getImages(int $personId): array
    {
        return $this->get('person/' . $personId . '/images');
    }

    /**
     * Get the images that this person has been tagged in.
     *
     * @param int $personId
     * @param array $parameters
     * @return array
     */

    public function getTaggedImages(int $personId, array $parameters = []): array
    {
        return $this->get('person/' . $personId . '/tagged_images', $parameters);
    }

    /**
     * Get a list of translations that have been created for a person.
     *
     * @param int $personId
     * @param array $parameters
     * @return array
     */

    public function getTranslations(int $personId, array $parameters = []): array
    {
        return $this->get('person/' . $personId . '/translations', $parameters);
    }

    /**
     * Get the most newly created person. This is a live response and will continuously change.
     *
     * @param int $personId
     * @param array $parameters
     * @return array
     */

    public function getLatest(array $parameters = []): array
    {
        return $this->get('person/latest', $parameters);
    }

    /**
     * Get the list of popular people on TMDB. This list updates daily.
     *
     * @param array $parameters
     * @return array
     */

    public function getPopular(array $parameters = []): array
    {
        return $this->get('person/popular', $parameters);
    }

}