<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

use Zenscrape\ZenscrapeClient;

$zenscrapeClient = new ZenscrapeClient();

$method = 'GET';
$url = 'https://app.zenscrape.com/api/v1/get';
$data = [
    'url' => 'https://www.21vek.by/'
];
$headers = [
    'Content-Type' => 'application/json',
    'apikey' => '95af6ce0-5a46-11eb-bf07-1f620e9d97fd'
];

$result = $zenscrapeClient->getPage($method, $url, $data, $headers);

dd($result);