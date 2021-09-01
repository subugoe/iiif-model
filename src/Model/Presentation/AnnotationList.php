<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * @see http://iiif.io/api/presentation/2.1/#annotation-list
 */
class AnnotationList
{
    /**
     * @Serializer\SerializedName("@context")
     * @Serializer\Since("2.0")
     */
    private string $context = 'http://iiif.io/api/presentation/2/context.json';

    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    /**
     * @Serializer\SerializedName("@type")
     */
    private string $type = 'sc:AnnotationList';

    private ?array $resources = null;

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getResources(): ?array
    {
        return $this->resources;
    }

    /**
     * @param mixed[] $resources
     */
    public function setResources(array $resources): self
    {
        $this->resources = $resources;

        return $this;
    }
}
