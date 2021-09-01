<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * An image.
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class Image
{
    /**
     * @Serializer\SerializedName("@id")
     */
    private ?string $id = null;

    private ?\Subugoe\IIIFModel\Model\Presentation\Service $service = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(Service $service): self
    {
        $this->service = $service;

        return $this;
    }
}
