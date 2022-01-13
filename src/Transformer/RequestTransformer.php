<?php
declare(strict_types=1);

namespace Zenscrape\Transformer;

use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Zenscrape\Model\QueryRequestModel;

class RequestTransformer
{
    public function transformObjectQueryToArray(QueryRequestModel $request): array
    {
        $normalizer = new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter());
        $serializer = new Serializer([$normalizer]);

        return $serializer->normalize($request);
    }
}