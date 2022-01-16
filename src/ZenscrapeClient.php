<?php
declare(strict_types=1);

namespace Zenscrape;

use Zenscrape\Auth\ApiKey;
use Zenscrape\Http\HttpClient;
use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Model\QueryRequestModel;
use Zenscrape\Transformer\Request\HeaderRequestTransformer;
use Zenscrape\Transformer\Request\QueryRequestTransformer;
use Zenscrape\Transformer\TransformerFactory;
use Zenscrape\Validator\QueryRequestValidator;

class ZenscrapeClient implements ZensrapeClientInterface
{
    private HttpClient $httpClient;

    public function __construct(string $apiKey)
    {
        ApiKey::setKey($apiKey);

        $this->httpClient = new HttpClient();
    }

    public function getPage(string $method, QueryRequestModel $query, HeaderRequestModel $headers): string
    {
        $queryRequestValidation = new QueryRequestValidator($query);
        $queryRequestValidation->check();

        $query = (new TransformerFactory())
            ->create(QueryRequestTransformer::class)
            ->transform($query);

//        $query['premium'] = 'true';

//        dd($query);

        $headers = (new TransformerFactory())
            ->create(HeaderRequestTransformer::class)
            ->transform($headers);

        $result = $this->httpClient->sendRequest($method, $query, $headers);

        return $result->getMessage();
    }
}