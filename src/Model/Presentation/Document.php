<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model\Presentation;

use JMS\Serializer\Annotation as Serializer;

/**
 * A solr document.
 *
 * @see http://iiif.io/api/presentation/2.1/#manifest
 *
 * @Serializer\ExclusionPolicy("NONE")
 */
class Document
{
    /**
     * @Serializer\SerializedName("@id")
     * @Serializer\Since("v1")
     */
    private ?string $id = null;

    /**
     * @var string
     * @Serializer\SerializedName("@type")
     * @Serializer\Since("v1")
     */
    private $type = 'Manifest';

    /**
     * @var string
     * @Serializer\SerializedName("@context")
     * @Serializer\Since("v1")
     */
    private $context = 'http://iiif.io/api/presentation/2/context.json';

    /**
     * @var string
     * @Serializer\SerializedName("viewingDirection")
     */
    private $viewingDirection = 'left-to-right';

    /**
     * @var string
     * @Serializer\SerializedName("viewingHint")
     */
    private $viewingHint = 'paged';
    private ?string $license = null;

    private ?string $description = null;

    /**
     * @Serializer\SerializedName("navDate")
     */
    private ?\DateTimeInterface $navDate = null;

    private ?string $within = null;

    private ?string $label = null;

    private ?array $metadata = null;

    private ?string $docstrct = null;

    private ?array $titles = null;

    private ?array $publishingPlaces = null;

    private ?\Subugoe\IIIFModel\Model\Presentation\Image $thumbnail = null;

    private ?array $sequences = null;

    /**
     * @Serializer\SkipWhenEmpty()
     */
    private ?string $attribution = null;

    private ?\Subugoe\IIIFModel\Model\Presentation\Image $logo = null;

    /**
     * @Serializer\SkipWhenEmpty()
     */
    private array $rendering = [];

    /**
     * @Serializer\SerializedName("seeAlso")
     */
    private ?array $seeAlso = null;

    /**
     * A.k.a Ranges.
     */
    private ?array $structures = null;

    /**
     * @Serializer\SkipWhenEmpty()
     */
    private array $related = [];

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getDocstrct(): ?string
    {
        return $this->docstrct;
    }

    public function setDocstrct(string $docstrct): self
    {
        $this->docstrct = $docstrct;

        return $this;
    }

    public function getTitles(): ?array
    {
        return $this->titles;
    }

    public function setTitles(array $titles): self
    {
        $this->titles = $titles;

        return $this;
    }

    public function getPublishingPlaces(): ?array
    {
        return $this->publishingPlaces;
    }

    /**
     * @param mixed[] $publishingPlaces
     */
    public function setPublishingPlaces(array $publishingPlaces): self
    {
        $this->publishingPlaces = $publishingPlaces;

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

    public function getThumbnail(): ?Image
    {
        return $this->thumbnail;
    }

    public function setThumbnail(Image $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getSequences(): ?array
    {
        return $this->sequences;
    }

    public function setSequences(array $sequences): self
    {
        $this->sequences = $sequences;

        return $this;
    }

    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    public function setMetadata(array $metadata): self
    {
        $this->metadata = $metadata;

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

    public function getLogo(): ?Image
    {
        return $this->logo;
    }

    public function setLogo(Image $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getStructures(): ?array
    {
        return $this->structures;
    }

    public function setStructures(array $structures): self
    {
        $this->structures = $structures;

        return $this;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(string $license): self
    {
        $this->license = $license;

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

    public function getNavDate(): \DateTimeInterface
    {
        return $this->navDate;
    }

    public function setNavDate(\DateTimeInterface $navDate): self
    {
        $this->navDate = $navDate;

        return $this;
    }

    public function getWithin(): ?string
    {
        return $this->within;
    }

    public function setWithin(string $within): self
    {
        $this->within = $within;

        return $this;
    }

    public function getRendering(): array
    {
        return $this->rendering;
    }

    public function setRendering(array $rendering): self
    {
        $this->rendering = $rendering;

        return $this;
    }

    public function getSeeAlso(): ?array
    {
        return $this->seeAlso;
    }

    public function setSeeAlso(array $seeAlso): self
    {
        $this->seeAlso = $seeAlso;

        return $this;
    }

    public function getRelated(): array
    {
        return $this->related;
    }

    public function setRelated(array $related): self
    {
        $this->related = $related;

        return $this;
    }
}
