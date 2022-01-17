<?php
declare(strict_types=1);

/*
 * This file is part of the Zenscrape package
 *
 * (c) Andrei Tsvyrko <nordic_alf@protonmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenscrape;

use Zenscrape\Auth\ApiKey;
use Zenscrape\Http\HttpClient;
use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Model\QueryRequestModel;
use Zenscrape\Transformer\Request\HeaderRequestTransformer;
use Zenscrape\Transformer\Request\QueryRequestTransformer;
use Zenscrape\Transformer\TransformerFactory;
use Zenscrape\Validator\QueryRequestValidator;

/**
 * Use Class ZenscrapeClient for your requests!
 *
 * @param string $apiKey - your api key from Zenscrape.com
 * @author Andrei Tsvyrko <nordic_alf@protonmail.com>
 */
class ZenscrapeClient implements ZensrapeClientInterface
{
    private HttpClient $httpClient;

    /**
     * ZenscrapeClient constructor
     *
     * @param string $apiKey - your required key from zenscrape.com
     */
    public function __construct(string $apiKey)
    {
        ApiKey::setKey($apiKey);

        $this->httpClient = new HttpClient();
    }

    public function getPage(string $method, QueryRequestModel $query, HeaderRequestModel $headers): string
    {
        $headers->setApikey(ApiKey::getKey());

        $queryRequestValidation = new QueryRequestValidator($query);
        $queryRequestValidation->check();

        $query = (new TransformerFactory())
            ->create(QueryRequestTransformer::class)
            ->transform($query);

        $headers = (new TransformerFactory())
            ->create(HeaderRequestTransformer::class)
            ->transform($headers);

        $result = $this->httpClient->sendRequest($method, $query, $headers);

        return $result->getMessage();
    }
}