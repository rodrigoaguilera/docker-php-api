<?php

declare(strict_types=1);

namespace Docker\API\Endpoint;

class ImageList extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    /**
     * Returns a list of images on the server. Note that it uses a different, smaller representation of an image than inspecting a single image.
     *
     * @param array $queryParameters {
     *
     *     @var bool $all Show all images. Only images from a final layer (no children) are shown by default.
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to
     *     @var bool $digests Show digest information as a `RepoDigests` field on each image.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Docker\API\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/images/json';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['all', 'filters', 'digests']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['all' => false, 'digests' => false]);
        $optionsResolver->setAllowedTypes('all', ['bool']);
        $optionsResolver->setAllowedTypes('filters', ['string']);
        $optionsResolver->setAllowedTypes('digests', ['bool']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ImageListInternalServerErrorException
     *
     * @return \Docker\API\Model\ImageSummary[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\ImageSummary[]', 'json');
        }
        if (500 === $status && false !== \mb_strpos($contentType, 'application/json')) {
            throw new \Docker\API\Exception\ImageListInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
