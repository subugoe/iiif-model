<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * IIIF Service definition.
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class Service
{
    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
}
