<?php

namespace Subugoe\IIIFModel\Model;

/**
 * Document for holding generic data.
 */
interface DocumentInterface
{
    public function getId(): string;

    public function setId(string $id): DocumentInterface;

    public function getTitle(): array;

    public function setTitle(array $title): DocumentInterface;

    public function getRightsOwner(): array;

    public function setRightsOwner(array $rightsOwner): DocumentInterface;

    public function getAuthors(): array;

    public function setAuthors(array $authors): DocumentInterface;

    public function getPublishingPlaces(): array;

    public function setPublishingPlaces(array $publishingPlaces): DocumentInterface;

    public function getClassification(): array;

    public function setClassification(array $classification): DocumentInterface;

    public function getPublishingYear(): int;

    public function setPublishingYear(int $publishingYear): DocumentInterface;

    public function getPublisher(): array;

    public function setPublisher(array $publisher): DocumentInterface;

    public function getLanguage(): array;

    public function setLanguage(array $language): DocumentInterface;

    public function getSubtitle(): array;

    public function setSubtitle(array $subtitle): DocumentInterface;

    public function getImageFormat(): string;

    public function setImageFormat(string $imageFormat): DocumentInterface;

    public function getLogicalStructures(): array;

    public function setLogicalStructures(array $logicalStructures): DocumentInterface;

    public function addLogicalStructure(LogicalStructure $structure);

    public function getLogicalStructure(int $id): LogicalStructure;

    public function getType(): string;

    public function setType(string $type): DocumentInterface;

    public function getPhysicalStructures(): array;

    public function getPhysicalStructure(int $id): PhysicalStructure;

    public function setPhysicalStructures(array $physicalStructures): DocumentInterface;

    public function addPhysicalStructure(PhysicalStructure $structure);

    public function getDescription(): string;

    public function setDescription(string $description): DocumentInterface;

    public function getParents(): array;

    public function setParents(array $parents): DocumentInterface;

    public function setParent(DocumentInterface $document);

    public function getRenderings(): array;

    public function setRenderings(array $renderings): DocumentInterface;

    public function getSeeAlso(): array;

    public function setSeeAlso(array $seeAlso): DocumentInterface;

    public function getMetadata(): array;

    public function setMetadata(array $metadata): DocumentInterface;

    public function getAdditionalIdentifiers(): array;

    public function setAdditionalIdentifiers(array $additionalIdentifiers): DocumentInterface;

    public function addMetadata(string $key, string $value);

    public function getRelated(): array;

    public function setRelated(array $related): DocumentInterface;

    public function getIndexingDate(): \DateTimeImmutable;

    public function setIndexingDate(\DateTimeImmutable $indexingDate): DocumentInterface;

    public function getTitlePage(): string;

    public function setTitlePage(string $titlePage): DocumentInterface;

    public function getIssue(): string;

    public function setIssue(string $issue): DocumentInterface;

    public function getPermaLink(): string;

    public function setPermaLink(string $permaLink): DocumentInterface;

    public function getLicense(): string;

    public function setLicense(string $license): DocumentInterface;
}
