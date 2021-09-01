<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * @see http://iiif.io/api/presentation/2.1/#image-resources
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class GenericResource
{
    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    private ?\Subugoe\IIIFModel\Model\Presentation\ResourceData $resource = null;

    private ?int $height = null;

    private ?int $width = null;

    private ?string $on = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getResource(): ?ResourceData
    {
        return $this->resource;
    }

    public function setResource(ResourceData $resource): self
    {
        $this->resource = $resource;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getOn(): ?string
    {
        return $this->on;
    }

    public function setOn(string $on): self
    {
        $this->on = $on;

        return $this;
    }
}
