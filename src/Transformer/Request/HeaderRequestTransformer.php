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

use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Zenscrape\Model\RequestModelInterface;

/**
 * Class HeaderRequestTransformer for transform headers object to array for request via guzzle
 */
class HeaderRequestTransformer implements RequestTransformerInterface
{
    public function transform(RequestModelInterface $request): array
    {
        $normalizer = new ObjectNormalizer();
        $serializer = new Serializer([$normalizer]);

        $mainHeaders = $serializer->normalize(
            $request,
            null,
            [AbstractNormalizer::IGNORED_ATTRIBUTES => ['customHeaders'], AbstractObjectNormalizer::SKIP_NULL_VALUES => true]
        );

        return array_merge($mainHeaders, $request->getCustomHeaders());
    }
}