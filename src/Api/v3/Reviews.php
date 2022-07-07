<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class Reviews extends Api
{

    /**
     * Retrieve the details of a movie or TV show review.
     *
     * @param int $reviewId
     * @return array
     */

    public function getReview(int $reviewId): array
    {
        return $this->get(3, 'review/' . $reviewId);
    }
}