<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * @see http://iiif.io/api/presentation/2.1/#range
 * @Serializer\ExclusionPolicy("NONE")
 */
class Structure
{
    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    /**
     * @Serializer\SerializedName("@type")
     */
    private string $type = 'sc:Range';

    private ?array $metadata = null;

    private ?string $label = null;

    /**
     * @Serializer\SerializedName("viewingHint")
     */
    private ?string $viewingHint = null;

    private ?array $members = null;

    private ?array $ranges = null;

    private ?array $canvases = null;

    private ?string $within = null;

    /**
     * @Serializer\SkipWhenEmpty()
     */
    private array $rendering = [];

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getViewingHint(): ?string
    {
        return $this->viewingHint;
    }

    public function setViewingHint(?string $viewingHint): self
    {
        $this->viewingHint = $viewingHint;

        return $this;
    }

    public function getMembers(): ?array
    {
        return $this->members;
    }

    public function setMembers(?array $members): self
    {
        $this->members = $members;

        return $this;
    }

    public function getRanges(): ?array
    {
        return $this->ranges;
    }

    public function setRanges(?array $ranges): self
    {
        $this->ranges = $ranges;

        return $this;
    }

    public function getCanvases(): ?array
    {
        return $this->canvases;
    }

    public function setCanvases(?array $canvases): self
    {
        $this->canvases = $canvases;

        return $this;
    }

    public function getWithin(): ?string
    {
        return $this->within;
    }

    public function setWithin(string $within): self
    {
        $this->within = $within;

        return $this;
    }

    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    public function setMetadata(?array $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    public function getRendering(): ?array
    {
        return $this->rendering;
    }

    public function setRendering(?array $rendering): self
    {
        $this->rendering = $rendering;

        return $this;
    }
}
