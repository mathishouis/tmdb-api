# The Movie Database API

A PHP package to make The Movie Database API easier to use. 

## Table of Contents

* [Requirements](#requirements)  
* [Installation](#installation)
* [Usage](#usage)
* [Wiki](#wiki)
* [Testing](#testing)

## Requirements

* PHP 7.0, 8.0 or 9.0

## Installation

```
composer require kozennnn/tmdb-api
```

## Usage

The following code return the movie with id 76341.

```php
<?php

use Kozennnn\TmdbAPI\TmdbClient;

$client = new TmdbClient("<YOUR_API_KEY>");
$movie = $client->Movies()->getMovie(76341);

```

If you don't know how to get an API key from The Movie Database just click [here](https://developers.themoviedb.org/3/getting-started/introduction) to see how to get one.

#

You can even provide parameters.

```php
<?php

use Kozennnn\TmdbAPI\TmdbClient;

$client = new TmdbClient("<YOUR_API_KEY>");
$movie = $client->Movies()->getMovie(76341, ['language' => 'fr']);

```
#

For further explanations, just take a look a our [wiki](https://github.com/kozennnn/tmdb-api/wiki)!

## Wiki

* [Home](https://github.com/kozennnn/tmdb-api/wiki)
* [Documentation](https://github.com/kozennnn/tmdb-api/wiki/Documentation)

## Testing

```
php tests/MovieTest.php
```