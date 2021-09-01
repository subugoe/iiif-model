<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Image;

use JMS\Serializer\Annotation as Serializer;

/**
 * Image informations for info.json file.
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class ImageInformation
{
    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    private ?int $width = null;

    private ?int $height = null;

    private ?array $ppi = null;

    private ?array $sizes = null;

    private ?array $tiles = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

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

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getPpi(): ?array
    {
        return $this->ppi;
    }

    public function setPpi(array $ppi): self
    {
        $this->ppi = $ppi;

        return $this;
    }

    public function getSizes(): ?array
    {
        return $this->sizes;
    }

    public function setSizes(array $sizes): self
    {
        $this->sizes = $sizes;

        return $this;
    }

    public function getTiles(): ?array
    {
        return $this->tiles;
    }

    public function setTiles(array $tiles): self
    {
        $this->tiles = $tiles;

        return $this;
    }
}
