<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model;

/**
 * Document for holding generic data.
 */
class Document implements DocumentInterface
{
    private ?string $id = null;

    private ?array $title = null;

    private array $subtitle = [];

    private array $rightsOwner = [];

    private ?array $metadata = null;

    private array $authors = [];

    private array $classification = [];

    private ?array $publishingPlaces = null;

    private ?int $publishingYear = null;

    private ?\DateTimeImmutable $indexingDate = null;

    private ?string $titlePage = null;

    private array $publisher = [];

    private array $language = [];

    private array $logicalStructures = [];

    private array $physicalStructures = [];

    private string $imageFormat = 'jpg';

    private ?string $type = null;

    private ?string $description = null;

    private array $parents = [];

    private array $renderings = [];

    private array $seeAlso = [];

    private array $additionalIdentifiers = [];

    private ?string $issue = null;

    private array $related = [];

    private ?string $permaLink = null;

    private string $license = '';

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): DocumentInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getTitle(): array
    {
        return $this->title;
    }

    /**
     * @param mixed[] $title
     */
    public function setTitle(array $title): DocumentInterface
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getRightsOwner(): array
    {
        return $this->rightsOwner;
    }

    /**
     * @param mixed[] $rightsOwner
     */
    public function setRightsOwner(array $rightsOwner): DocumentInterface
    {
        $this->rightsOwner = $rightsOwner;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }

    /**
     * @param mixed[] $authors
     */
    public function setAuthors(array $authors): DocumentInterface
    {
        $this->authors = $authors;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getPublishingPlaces(): array
    {
        return $this->publishingPlaces;
    }

    /**
     * @param mixed[] $publishingPlaces
     */
    public function setPublishingPlaces(array $publishingPlaces): DocumentInterface
    {
        $this->publishingPlaces = $publishingPlaces;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getClassification(): array
    {
        return $this->classification;
    }

    /**
     * @param mixed[] $classification
     */
    public function setClassification(array $classification): DocumentInterface
    {
        $this->classification = $classification;

        return $this;
    }

    public function getPublishingYear(): int
    {
        return $this->publishingYear;
    }

    public function setPublishingYear(int $publishingYear): DocumentInterface
    {
        $this->publishingYear = $publishingYear;

        return $this;
    }

    public function getPublisher(): array
    {
        return $this->publisher;
    }

    public function setPublisher(array $publisher): DocumentInterface
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getLanguage(): array
    {
        return $this->language;
    }

    /**
     * @param mixed[] $language
     */
    public function setLanguage(array $language): DocumentInterface
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getSubtitle(): array
    {
        return $this->subtitle;
    }

    /**
     * @param mixed[] $subtitle
     */
    public function setSubtitle(array $subtitle): DocumentInterface
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getImageFormat(): string
    {
        return $this->imageFormat;
    }

    public function setImageFormat(string $imageFormat): DocumentInterface
    {
        $this->imageFormat = $imageFormat;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getLogicalStructures(): array
    {
        return $this->logicalStructures;
    }

    /**
     * @param mixed[] $logicalStructures
     */
    public function setLogicalStructures(array $logicalStructures): DocumentInterface
    {
        $this->logicalStructures = $logicalStructures;

        return $this;
    }

    public function addLogicalStructure(LogicalStructure $structure): void
    {
        $this->logicalStructures[] = $structure;
    }

    public function getLogicalStructure(int $id): LogicalStructure
    {
        return $this->logicalStructures[$id];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): DocumentInterface
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getPhysicalStructures(): array
    {
        return $this->physicalStructures;
    }

    public function getPhysicalStructure(int $id): PhysicalStructure
    {
        return $this->physicalStructures[$id];
    }

    /**
     * @param mixed[] $physicalStructures
     */
    public function setPhysicalStructures(array $physicalStructures): DocumentInterface
    {
        $this->physicalStructures = $physicalStructures;

        return $this;
    }

    public function addPhysicalStructure(PhysicalStructure $structure): void
    {
        $this->physicalStructures[] = $structure;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): DocumentInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getParents(): array
    {
        return $this->parents;
    }

    /**
     * @param mixed[] $parents
     */
    public function setParents(array $parents): DocumentInterface
    {
        $this->parents = $parents;

        return $this;
    }

    /**
     * @param Document $document
     */
    public function setParent(DocumentInterface $document): void
    {
        $this->parents[] = $document;
    }

    /**
     * @return mixed[]
     */
    public function getRenderings(): array
    {
        return $this->renderings;
    }

    /**
     * @param mixed[] $renderings
     */
    public function setRenderings(array $renderings): DocumentInterface
    {
        $this->renderings = $renderings;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getSeeAlso(): array
    {
        return $this->seeAlso;
    }

    /**
     * @param mixed[] $seeAlso
     */
    public function setSeeAlso(array $seeAlso): DocumentInterface
    {
        $this->seeAlso = $seeAlso;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * @param mixed[] $metadata
     */
    public function setMetadata(array $metadata): DocumentInterface
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getAdditionalIdentifiers(): array
    {
        return $this->additionalIdentifiers;
    }

    /**
     * @param mixed[] $additionalIdentifiers
     */
    public function setAdditionalIdentifiers(array $additionalIdentifiers): DocumentInterface
    {
        $this->additionalIdentifiers = $additionalIdentifiers;

        return $this;
    }

    public function addMetadata(string $key, string $value): void
    {
        $this->metadata[$key] = $value;
    }

    /**
     * @return mixed[]
     */
    public function getRelated(): array
    {
        return $this->related;
    }

    /**
     * @param mixed[] $related
     */
    public function setRelated(array $related): DocumentInterface
    {
        $this->related = $related;

        return $this;
    }

    public function getIndexingDate(): \DateTimeImmutable
    {
        return $this->indexingDate;
    }

    public function setIndexingDate(\DateTimeImmutable $indexingDate): DocumentInterface
    {
        $this->indexingDate = $indexingDate;

        return $this;
    }

    public function getTitlePage(): string
    {
        return $this->titlePage;
    }

    public function setTitlePage(string $titlePage): DocumentInterface
    {
        $this->titlePage = $titlePage;

        return $this;
    }

    public function getIssue(): string
    {
        return $this->issue;
    }

    public function setIssue(string $issue): DocumentInterface
    {
        $this->issue = $issue;

        return $this;
    }

    public function getPermaLink(): string
    {
        return $this->permaLink;
    }

    public function setPermaLink(string $permaLink): DocumentInterface
    {
        $this->permaLink = $permaLink;

        return $this;
    }

    public function getLicense(): string
    {
        return $this->license;
    }

    public function setLicense(string $license): DocumentInterface
    {
        $this->license = $license;

        return $this;
    }
}
