<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * A sequence.
 *
 * @see http://iiif.io/api/presentation/2.1/#sequence
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
final class Sequence
{
    /**
     * @Serializer\SerializedName("@context")
     * @Serializer\Exclude(if="object.getContext() === ''")
     */
    private string $context = 'http://iiif.io/api/presentation/2/context.json';

    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    /**
     * @Serializer\SerializedName("startCanvas")
     */
    private ?string $startCanvas = null;

    private ?array $canvases = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getStartCanvas(): ?string
    {
        return $this->startCanvas;
    }

    public function setStartCanvas(string $startCanvas): self
    {
        $this->startCanvas = $startCanvas;

        return $this;
    }

    public function getCanvases(): ?array
    {
        return $this->canvases;
    }

    public function setCanvases(array $canvases): self
    {
        $this->canvases = $canvases;

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
