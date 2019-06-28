<?php
declare(strict_types=1);

namespace Subugoe\IIIFModel\Service;

use Subugoe\IIIFModel\Model\Image\Image;
use Subugoe\IIIFModel\Model\Image\ImageInformation;

interface ImageServiceInterface
{
    public function process(Image $image): string;

    public function getImageJsonInformation(string $identifier, $originalImage): ImageInformation;

    public function getOriginalFileContents(Image $image);

    public function getCachedFileIdentifier(Image $image): string;
}
