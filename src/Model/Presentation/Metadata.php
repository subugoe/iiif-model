<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * Manifest metadata.
 */
#[Serializer\ExclusionPolicy(Serializer\ExclusionPolicy::NONE)]
class Metadata
{
    private ?string $label = null;

    private string|array $value;

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string|array
     */
    public function getValue(): array|string
    {
        return $this->value;
    }

    /**
     * @param array|string $value
     * @return Metadata
     */
    public function setValue(array|string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
