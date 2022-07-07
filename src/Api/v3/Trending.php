<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class Trending extends Api
{

    /**
     * Get the daily or weekly trending items. The daily trending list tracks items over
     * the period of a day while items have a 24 hour half life. The weekly list tracks
     * items over a 7 day period, with a 7 day half life.
     *
     * @param string $mediaType
     * @param string $timeWindow
     * @return array
     */

    public function getTrending(string $mediaType, string $timeWindow): array
    {
        return $this->get(3, 'trending/' . $mediaType . '/' . $timeWindow);
    }

}