<?php

namespace Kozennnn\TmdbAPI\Api\v3;

use Kozennnn\TmdbAPI\Api\Api;

class Lists extends Api
{

    /**
     * Get the details of a list.
     *
     * @param int $listId
     * @param array $parameters
     * @return array
     */

    public function getList(int $listId, array $parameters = []): array
    {
        return $this->get(3, 'list/' . $listId, $parameters);
    }

    /**
     * You can use this method to check if a movie has already been added to the list.
     *
     * @param int $listId
     * @param int $movieId
     * @return array
     */

    public function checkItemStatus(int $listId, int $movieId): array
    {
        return $this->get(3, 'list/' . $listId . '/item_status', ['movie_id' => $movieId]);
    }

    /**
     * Create a list.
     *
     * @param int $sessionId
     * @param array $content
     * @return array
     */

    public function createList(int $sessionId, array $content): array
    {
        return $this->post(3, 'list', $content, ['session_id' => $sessionId]);
    }

    /**
     * Add a movie to a list.
     *
     * @param int $listId
     * @param int $sessionId
     * @param int $mediaId
     * @return array
     */

    public function addMovie(int $listId, int $sessionId, int $mediaId): array
    {
        return $this->post(3, 'list/' . $listId . '/add_item', ['media_id' => $mediaId], ['session_id' => $sessionId]);
    }

    /**
     * Remove a movie from a list.
     *
     * @param int $listId
     * @param int $sessionId
     * @param int $mediaId
     * @return array
     */

    public function removeMovie(int $listId, int $sessionId, int $mediaId): array
    {
        return $this->post(3, 'list/' . $listId . '/remove_item', ['media_id' => $mediaId], ['session_id' => $sessionId]);
    }

    /**
     * Clear all of the items from a list.
     *
     * @param int $listId
     * @param int $sessionId
     * @param boolean $confirm
     * @return array
     */

    public function clearList(int $listId, int $sessionId, boolean $confirm): array
    {
        return $this->post(3, 'list/' . $listId . '/clear', null, ['session_id' => $sessionId, 'confirm' => $confirm]);
    }

    /**
     * Delete a list.
     *
     * @param int $listId
     * @param int $sessionId
     * @return array
     */

    public function deleteList(int $listId, int $sessionId): array
    {
        return $this->delete(3, 'list/' . $listId, null, ['session_id' => $sessionId]);
    }

}