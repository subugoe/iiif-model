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
     * @var string
     * @Serializer\SerializedName("@context")
     */
    private $context = 'https://iiif.io/api/image/2/context.json';

    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    private ?int $width = null;

    private ?int $height = null;

    /**
     * @var string
     */
    private string $protocol = 'https://iiif.io/api/image';

    /**
     * @var string
     */
    private string $profile = 'https://iiif.io/api/image/2/level0.json';

    /**
     * @var array
     */
    private $sizes;

    /**
     * @var array
     */
    private $tiles;

    public function getId(): string
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

    /**
     * @return string
     */
    public function getProfile(): string
    {
        return $this->profile;
    }

    public function setProfile(string $profile): self
    {
        $this->profile = $profile;
        return $this;
    }


}
