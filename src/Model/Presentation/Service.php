<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * IIIF Service definition.
 */
#[Serializer\ExclusionPolicy(Serializer\ExclusionPolicy::NONE)]
class Service
{
    #[Serializer\SerializedName('@id')]
    private ?string $id = null;

    #[Serializer\SerializedName('@context')]
    private string $context = 'http://iiif.io/api/image/2/context.json';

    private string $profile = 'http://iiif.io/api/image/2/level1.json';

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
