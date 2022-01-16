<?php
declare(strict_types=1);

namespace Zenscrape\Transformer\Request;

use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Zenscrape\Model\RequestModelInterface;

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