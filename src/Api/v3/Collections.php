<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class Collections extends Api
{

    /**
     * Get collection details by id.
     *
     * @param int $collectionId
     * @param array $parameters
     * @return array
     */

    public function getDetails(int $collectionId, array $parameters = []): array
    {
        return $this->get(3, 'collection/' . $collectionId, $parameters);
    }

    /**
     * Get the images for a collection by id.
     *
     * @param int $collectionId
     * @param array $parameters
     * @return array
     */

    public function getImages(int $collectionId, array $parameters = []): array
    {
        return $this->get(3, 'collection/' . $collectionId . '/images', $parameters);
    }

    /**
     * Get the list translations for a collection by id.
     *
     * @param int $collectionId
     * @param array $parameters
     * @return array
     */

    public function getTranslations(int $collectionId, array $parameters = []): array
    {
        return $this->get(3, 'collection/' . $collectionId . '/translations', $parameters);
    }

}