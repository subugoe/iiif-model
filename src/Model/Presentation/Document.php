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
     * @var string
     * @Serializer\SerializedName("@id")
     * @Serializer\Since("v1")
     */
    private $id;

    /**
     * @var string
     * @Serializer\SerializedName("@type")
     * @Serializer\Since("v1")
     */
    private $type = 'sc:Manifest';

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

    /**
     * @var string
     */
    private $license;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("navDate")
     */
    private $navDate;

    /**
     * @var string
     */
    private $within;

    /**
     * @var string
     */
    private $label;

    /**
     * @var array
     */
    private $metadata;

    /**
     * @var string
     */
    private $docstrct;

    /**
     * @var array
     */
    private $titles;

    /**
     * @var array
     */
    private $publishingPlaces;

    /**
     * @var Image
     */
    private $thumbnail;

    /**
     * @var array
     */
    private $sequences;

    /**
     * @var string
     * @Serializer\SkipWhenEmpty()
     */
    private $attribution;

    /**
     * @var Image
     */
    private $logo;

    /**
     * @var array
     * @Serializer\SkipWhenEmpty()
     */
    private $rendering;

    /**
     * @var array
     * @Serializer\SerializedName("seeAlso")
     */
    private $seeAlso;

    /**
     * A.k.a Ranges.
     *
     * @var array
     */
    private $structures;

    /**
     * @var array
     * @Serializer\SkipWhenEmpty()
     */
    private $related;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Document
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocstrct(): string
    {
        return $this->docstrct;
    }

    /**
     * @param string $docstrct
     *
     * @return Document
     */
    public function setDocstrct(string $docstrct): self
    {
        $this->docstrct = $docstrct;

        return $this;
    }

    /**
     * @return array
     */
    public function getTitles(): array
    {
        return $this->titles;
    }

    /**
     * @param array $titles
     *
     * @return Document
     */
    public function setTitles(array $titles): self
    {
        $this->titles = $titles;

        return $this;
    }

    /**
     * @return array
     */
    public function getPublishingPlaces(): array
    {
        return $this->publishingPlaces;
    }

    /**
     * @param array $publishingPlaces
     *
     * @return Document
     */
    public function setPublishingPlaces(array $publishingPlaces): self
    {
        $this->publishingPlaces = $publishingPlaces;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return Document
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Image
     */
    public function getThumbnail(): Image
    {
        return $this->thumbnail;
    }

    /**
     * @param Image $thumbnail
     *
     * @return Document
     */
    public function setThumbnail(Image $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * @return array
     */
    public function getSequences(): array
    {
        return $this->sequences;
    }

    /**
     * @param array $sequences
     *
     * @return Document
     */
    public function setSequences(array $sequences): self
    {
        $this->sequences = $sequences;

        return $this;
    }

    /**
     * @return array
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     *
     * @return Document
     */
    public function setMetadata(array $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribution(): string
    {
        return $this->attribution;
    }

    /**
     * @param string $attribution
     *
     * @return Document
     */
    public function setAttribution(string $attribution): self
    {
        $this->attribution = $attribution;

        return $this;
    }

    /**
     * @return Image
     */
    public function getLogo(): Image
    {
        return $this->logo;
    }

    /**
     * @param Image $logo
     *
     * @return Document
     */
    public function setLogo(Image $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return array
     */
    public function getStructures(): array
    {
        return $this->structures;
    }

    /**
     * @param array $structures
     *
     * @return Document
     */
    public function setStructures(array $structures): self
    {
        $this->structures = $structures;

        return $this;
    }

    /**
     * @return string
     */
    public function getLicense(): string
    {
        return $this->license;
    }

    /**
     * @param string $license
     *
     * @return Document
     */
    public function setLicense(string $license): self
    {
        $this->license = $license;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Document
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNavDate(): \DateTime
    {
        return $this->navDate;
    }

    /**
     * @param \DateTime $navDate
     *
     * @return Document
     */
    public function setNavDate(\DateTime $navDate): self
    {
        $this->navDate = $navDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithin(): string
    {
        return $this->within;
    }

    /**
     * @param string $within
     *
     * @return Document
     */
    public function setWithin(string $within): self
    {
        $this->within = $within;

        return $this;
    }

    /**
     * @return array
     */
    public function getRendering(): array
    {
        return $this->rendering;
    }

    /**
     * @param array $rendering
     *
     * @return Document
     */
    public function setRendering(array $rendering): self
    {
        $this->rendering = $rendering;

        return $this;
    }

    /**
     * @return array
     */
    public function getSeeAlso(): array
    {
        return $this->seeAlso;
    }

    /**
     * @param array $seeAlso
     *
     * @return Document
     */
    public function setSeeAlso(array $seeAlso): self
    {
        $this->seeAlso = $seeAlso;

        return $this;
    }

    /**
     * @return array
     */
    public function getRelated(): array
    {
        return $this->related;
    }

    /**
     * @param array $related
     *
     * @return Document
     */
    public function setRelated(array $related): self
    {
        $this->related = $related;

        return $this;
    }
}
