<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace OpenApi\PetStoreClient\Request;

use OpenApi\PetStoreClient\Schema\SerializableInterface;

class FindPetsByTagsRequest implements RequestInterface
{
    private ?array $tags = null;

    private string $contentType = '';

    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getRoute(): string
    {
        return 'pet/findByTags';
    }

    public function getQueryParameters(): array
    {
        return \array_map(static function ($value) {
            return $value instanceof SerializableInterface ? $value->toArray() : $value;
        }, \array_filter(['tags' => $this->tags], static function ($value) {
            return null !== $value;
        }));
    }

    public function getRawQueryParameters(): array
    {
        return ['tags' => $this->tags];
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function getBody()
    {
        return null;
    }
}
