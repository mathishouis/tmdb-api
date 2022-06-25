<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Kozennnn\TmdbAPI\TmdbClient;

$client = new TmdbClient("");
//print_r($client->Movies()->getImages(76341, ['language' => 'fr']));
//print_r($client->Movies()->rateMovie(76341, 98));
//print_r($client->Movies()->deleteRating(76341));

