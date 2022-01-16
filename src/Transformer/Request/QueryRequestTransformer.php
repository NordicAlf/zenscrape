<?php
declare(strict_types=1);

namespace Zenscrape\Transformer\Request;

use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Zenscrape\Model\RequestModelInterface;

class QueryRequestTransformer implements RequestTransformerInterface
{
    public function transform(RequestModelInterface $request): array
    {
        $normalizer = new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter());
        $serializer = new Serializer([$normalizer]);

        return $serializer->normalize($request, null, [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]);
    }
}