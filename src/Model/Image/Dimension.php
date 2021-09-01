<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Image;

use JMS\Serializer\Annotation as Serializer;

/**
 * Image Dimensions.
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class Dimension
{
    private ?float $height = null;

    private ?float $width = null;

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }
}
