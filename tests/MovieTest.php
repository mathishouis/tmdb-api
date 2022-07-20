<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Kozennnn\TmdbAPI\TmdbClient;

$client = new TmdbClient("306cc0d5addcd5f6f1925d9f88819809", false);
print_r($client->v3()->Networks()->getNetwork(1));
print_r($client->v3()->TV()->getTVShow(615, ['language' => 'fr']));
//print_r($client->Movies()->getImages(76341, ['language' => 'fr']));
//print_r($client->Movies()->rateMovie(76341, 98));
//print_r($client->Movies()->deleteRating(76341));
//print_r($client->People()->getPopular());
//print_r($client->Search()->searchCompanies("a"));
