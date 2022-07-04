<?php

namespace Kozennnn\TmdbAPI\Api;

use Kozennnn\TmdbAPI\TmdbClient;

abstract class Api
{

    protected $client;

    /**
     * Api constructor.
     * @param TmdbClient $client
     */

    public function __construct(TmdbClient $client)
    {

        $this->client = $client;

    }

    /**
     * Get method
     *
     * @param string $path
     * @param array $parameters
     * @return array
     */

    public function get(string $path, array $parameters = []): array {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->client->isSecure() ? TmdbClient::SCHEME_SECURE : TmdbClient::SCHEME_INSECURE . TmdbClient::API_URL . $path . "?api_key=" . $this->client->getApiKey() . "&" . http_build_query($parameters));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data, true);
    }

    public function post(string $path, array $content = null, array $parameters = []): array {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->client->isSecure() ? TmdbClient::SCHEME_SECURE : TmdbClient::SCHEME_INSECURE . TmdbClient::API_URL . $path . "?api_key=" . $this->client->getApiKey() . "&" . http_build_query($parameters));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data, true);
    }

    public function delete(string $path, array $content = null, array $parameters = []): array {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->client->isSecure() ? TmdbClient::SCHEME_SECURE : TmdbClient::SCHEME_INSECURE . TmdbClient::API_URL . $path . "?api_key=" . $this->client->getApiKey() . "&" . http_build_query($parameters));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data, true);
    }

    /**
     * Return the TMDBClient
     *
     * @return TmdbClient
     */

    public function getClient(): TmdbClient {
        return $this->client;
    }

}