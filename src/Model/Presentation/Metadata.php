<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * Manifest metadata.
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class Metadata
{
    private ?string $label = null;

    /**
     * @var string|array
     */
    private $value;

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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string|array $value
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }
}
