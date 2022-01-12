<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

use Zenscrape\ZenscrapeClient;
use Zenscrape\Auth\ApiKey;

$zenscrapeClient = new ZenscrapeClient('95af6ce0-5a46-11eb-bf07-1f620e9d97fd');

$method = 'GET';
$url = 'https://app.zenscrape.com/api/v1/get';
$data = [
    'url' => 'https://nekoguard.github.io/CV/'
];
$headers = [
    'Content-Type' => 'application/json',
    'apikey' => ApiKey::getKey()
];

$result = $zenscrapeClient->getPage($method, $url, $data, $headers);

dd($result);