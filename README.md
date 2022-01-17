# PHP Zenscrape client via Guzzle

Zenscrape package is a simple PHP HTTP client-provider that makes it easy to parsing site-pages via https://zenscrape.com

Requirements
------------
↟PHP 8.0^<br/>
↟Guzzle 7.0^<br/>
↟Symfony/serializer<br/>
↟Symfony/property-access<br/>

Installation
------------
```bash
composer require nordicalf/zenscrape
```
Example usage
-------------
```php
$queryRequest = new QueryRequestModel();
$queryRequest->setRender(true);
$queryRequest->setLocation('eu');
$queryRequest->setUrl('https://www.php.net/');

$headersRequest = new HeaderRequestModel();
$headersRequest->setCustomHeader('Content-Type', 'application/json');

$zenscrapeClient = new ZenscrapeClient('YOUR_API_KEY_FROM_ZENSCRAPE.COM');

echo $zenscrapeClient->getPage('POST', $queryRequest, $headersRequest);
```

Future features
------------
↟ Сalculate how many points it costs to complete a request<br/>
↟ Timer for make request<br/>
↟ Async requests<br/>

Contacts
------------
nordic_alf@protonmail.com

[1]: https://packagist.org/packages/nordicalf/zenscrape