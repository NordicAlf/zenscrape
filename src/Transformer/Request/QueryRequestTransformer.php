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

namespace Zenscrape\Transformer\Request;

use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Zenscrape\Model\RequestModelInterface;

/**
 * Class QueryRequestTransformer for transform query object to array for request via guzzle
 */
class QueryRequestTransformer implements RequestTransformerInterface
{
    public function transform(RequestModelInterface $request): array
    {
        $normalizer = new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter());
        $serializer = new Serializer([$normalizer]);

        return $serializer->normalize($request, null, [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]);
    }
}