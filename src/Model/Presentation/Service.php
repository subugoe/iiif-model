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

    /**
     * @var string
     * @Serializer\SerializedName("@context")
     */
    private $context = 'http://iiif.io/api/image/2/context.json';

    /**
     * @var string
     */
    private $profile = 'http://iiif.io/api/image/2/level1.json';

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
