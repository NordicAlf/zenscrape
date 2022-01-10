<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

use Zenscrape\ZenscrapeClient;

$zenscrapeClient = new ZenscrapeClient();

$result = $zenscrapeClient->request();

dd($result);