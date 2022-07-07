<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class Networks extends Api
{

    /**
     * Get the details of a network.
     *
     * @param int $networkId
     * @return array
     */

    public function getNetwork(int $networkId): array
    {
        return $this->get(3, 'network/' . $networkId);
    }

    /**
     * Get the alternative names of a network.
     *
     * @param int $networkId
     * @return array
     */

    public function getAlternativeNames(int $networkId): array
    {
        return $this->get(3, 'network/' . $networkId . '/alternative_names');
    }

    /**
     * Get the TV network logos by id.
     *
     * @param int $networkId
     * @return array
     */

    public function getImages(int $networkId): array
    {
        return $this->get(3, 'network/' . $networkId . '/images');
    }

}