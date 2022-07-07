<?php

namespace Kozennnn\TmdbAPI\Api\v4;

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
        return $this->get(4, 'list/' . $listId, $parameters);
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
        return $this->get('list/' . $listId . '/item_status', ['movie_id' => $movieId]);
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
        return $this->post('list', $content, ['session_id' => $sessionId]);
    }

    /**
     * Add an item to a list.
     *
     * @param int $listId
     * @param array $items
     * @return array
     */

    public function addItems(int $listId, array $items): array
    {
        return $this->post('list/' . $listId . '/items', ['items' => $items]);
    }

    /**
     * Remove an item from a list.
     *
     * @param int $listId
     * @param array $items
     * @return array
     */

    public function removeItem(int $listId, array $items): array
    {
        return $this->delete('list/' . $listId . '/items', ['items' => $items]);
    }

    /**
     * Clear all of the items from a list.
     *
     * @param int $listId
     * @return array
     */

    public function clearList(int $listId): array
    {
        return $this->get('list/' . $listId . '/clear');
    }

    /**
     * Delete a list.
     *
     * @param int $listId
     * @return array
     */

    public function deleteList(int $listId): array
    {
        return $this->delete('list/' . $listId);
    }

}