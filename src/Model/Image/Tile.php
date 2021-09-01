<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Image;

use JMS\Serializer\Annotation as Serializer;

/**
 * Tiles for image api.
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class Tile
{
    private ?int $width = null;

    private ?int $height = null;

    /**
     * @Serializer\SerializedName("scaleFactors")
     */
    private array $scaleFactors = [1, 2, 4, 8, 16];

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

    public function getScaleFactors(): array
    {
        return $this->scaleFactors;
    }

    public function setScaleFactors(array $scaleFactors): self
    {
        $this->scaleFactors = $scaleFactors;

        return $this;
    }
}
