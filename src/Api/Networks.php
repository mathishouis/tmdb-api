<?php

namespace Kozennnn\TmdbAPI\Api;

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
        return $this->get('network/' . $networkId);
    }

    /**
     * Get the alternative names of a network.
     *
     * @param int $networkId
     * @return array
     */

    public function getAlternativeNames(int $networkId): array
    {
        return $this->get('network/' . $networkId . '/alternative_names');
    }

    /**
     * Get the TV network logos by id.
     *
     * @param int $networkId
     * @return array
     */

    public function getImages(int $networkId): array
    {
        return $this->get('network/' . $networkId . '/images');
    }

}