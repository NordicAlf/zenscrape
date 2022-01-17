<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

use Zenscrape\ZenscrapeClient;
use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Model\QueryRequestModel;

\Zenscrape\Auth\ApiKey::setKey();

$queryRequest = new QueryRequestModel();
$queryRequest->setRender(true);
//$queryRequest->setPremium(true);
//$queryRequest->setScrollToBottom(true);
$queryRequest->setLocation('eu');
$queryRequest->setUrl('https://www.tic.com/index.html');
$queryRequest->setWaitFor(3);
//$queryRequest->setWaitForCss('.title');

$headersRequest = new HeaderRequestModel();

$headersRequest->setApikey('95af6ce0-5a46-11eb-bf07-1f620e9d97fd');
$headersRequest->setCustomHeader('Content-Type', 'application/json');

$zenscrapeClient = new ZenscrapeClient('95af6ce0-5a46-11eb-bf07-1f620e9d97fd');

$result = $zenscrapeClient->getPage('POST', $queryRequest, $headersRequest);

dd($result);