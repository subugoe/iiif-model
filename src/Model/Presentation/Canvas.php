<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Canvas.
 *
 * @see http://iiif.io/api/presentation/2.1/#canvas
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class Canvas
{
    /**
     * @Serializer\SerializedName("@context")
     * @Serializer\Exclude(if="object.getContext() === ''")
     */
    private string $context = 'http://iiif.io/api/presentation/2/context.json';

    /**
     * @var string
     * @Serializer\SerializedName("@type")
     */
    private $type = 'sc:Canvas';

    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    private ?string $label = null;

    private ?int $height = null;

    private ?int $width = null;

    private ?array $images = null;

    /**
     * @Serializer\SerializedName("otherContent")
     */
    private ?array $otherContent = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

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

    public function getImages(): ?array
    {
        return $this->images;
    }

    public function setImages(?array $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getOtherContent(): ?array
    {
        return $this->otherContent;
    }

    public function setOtherContent(?array $otherContent): self
    {
        $this->otherContent = $otherContent;

        return $this;
    }

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): self
    {
        $this->context = $context;

        return $this;
    }
}
