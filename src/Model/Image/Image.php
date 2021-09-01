<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Image;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * IIIF image.
 */
class Image
{
    /**
     * @Assert\NotBlank()
     */
    protected ?string $identifier = null;

    protected string $region = 'full';

    protected ?string $size = null;

    /**
     * @var string|int
     * @Assert\Regex(pattern="/^(!)?(-)?[0-9]{1,3}$/", message="Invalid rotation format"))
     */
    protected $rotation = 0;

    protected string $quality = 'default';

    /**
     * @see http://iiif.io/api/image/2.0/#format
     *
     * @Assert\Choice(choices = {"jpg", "tif", "png", "gif", "jp2", "pdf", "webp"}, message="Please use a supported image format. See http://iiif.io/api/image/2.0/#format" )
     */
    protected string $format = 'jpg';

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int|string
     */
    public function getRotation()
    {
        return $this->rotation;
    }

    /**
     * @param int|string $rotation
     */
    public function setRotation($rotation): self
    {
        $this->rotation = $rotation;

        return $this;
    }

    public function getQuality(): string
    {
        return $this->quality;
    }

    public function setQuality(string $quality): self
    {
        $this->quality = $quality;

        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }
}
