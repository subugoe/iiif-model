<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model;

/**
 * Logical structure.
 */
class LogicalStructure
{
    private ?string $id = null;

    private ?string $label = null;

    private ?string $type = null;

    private ?int $startPage = null;

    private ?int $endPage = null;

    private ?int $level = null;

    private ?array $renderings = null;

    private ?array $metadata = null;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getStartPage(): ?int
    {
        return $this->startPage;
    }

    public function setStartPage(int $startPage): self
    {
        $this->startPage = $startPage;

        return $this;
    }

    public function getEndPage(): ?int
    {
        return $this->endPage;
    }

    public function setEndPage(int $endPage): self
    {
        $this->endPage = $endPage;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getRenderings(): ?array
    {
        return $this->renderings;
    }

    public function setRenderings(array $renderings): self
    {
        $this->renderings = $renderings;

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
}
