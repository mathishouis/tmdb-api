<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Kozennnn\TmdbAPI\TmdbClient;

$client = new TmdbClient("");
print_r($client->Movies()->getMovie(76341, ['language' => 'fr']));

