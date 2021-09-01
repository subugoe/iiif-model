<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * Top Collection. Features all available collections.
 */
class Collections
{
    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    private ?string $label = null;

    private ?string $description = null;

    private ?string $attribution = null;

    private ?array $collections = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAttribution(): ?string
    {
        return $this->attribution;
    }

    public function setAttribution(string $attribution): self
    {
        $this->attribution = $attribution;

        return $this;
    }

    public function getCollections(): ?array
    {
        return $this->collections;
    }

    public function setCollections(array $collections): self
    {
        $this->collections = $collections;

        return $this;
    }

    public function addCollection(Collection $collection): void
    {
        $this->collections[] = $collection;
    }
}
