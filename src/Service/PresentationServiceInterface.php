<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Service;

use Subugoe\IIIFModel\Model\Presentation\AnnotationList;
use Subugoe\IIIFModel\Model\Presentation\Canvas;
use Subugoe\IIIFModel\Model\Presentation\Collection;
use Subugoe\IIIFModel\Model\Presentation\Collections;
use Subugoe\IIIFModel\Model\Presentation\Document;
use Subugoe\IIIFModel\Model\Presentation\GenericResource;
use Subugoe\IIIFModel\Model\Presentation\Range;
use Subugoe\IIIFModel\Model\Presentation\Sequence;

interface PresentationServiceInterface
{
    public function getManifest(\Subugoe\IIIFModel\Model\Document $document): Document;

    public function getAnnotationList(\Subugoe\IIIFModel\Model\Document $document, string $name): AnnotationList;

    public function getCollection(Collection $collection);

    public function getCollections(Collections $collections);

    public function getRange(\Subugoe\IIIFModel\Model\Document $document, string $name): Range;

    public function getCanvas(\Subugoe\IIIFModel\Model\Document $document, string $canvasId, int $physicalStructureId = -1): Canvas;

    public function getImage(\Subugoe\IIIFModel\Model\Document $document, string $imageId): GenericResource;

    public function getSequence(\Subugoe\IIIFModel\Model\Document $document, string $name): Sequence;
}
