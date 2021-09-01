<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * @see http://iiif.io/api/presentation/2.1/#range
 * Range
 */
class Range
{
    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    private ?string $label = null;

    /**
     * @Serializer\SerializedName("viewingHint")
     */
    private string $viewingHint = 'top';

    private ?array $members;

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

    public function getViewingHint(): string
    {
        return $this->viewingHint;
    }

    public function setViewingHint(string $viewingHint): self
    {
        $this->viewingHint = $viewingHint;

        return $this;
    }

    public function getMembers(): ?array
    {
        return $this->members;
    }

    public function setMembers(array $members): self
    {
        $this->members = $members;

        return $this;
    }

    public function addMember(Canvas $canvas): void
    {
        $this->members[] = $canvas;
    }
}
