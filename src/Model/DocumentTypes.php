<?php

namespace Subugoe\IIIFModel\Model;

use MyCLabs\Enum\Enum;

/**
 * @see http://dfg-viewer.de/strukturdatenset/
 * We only use a small subset as defined some specifications
 * on http://www.eromm.org/dcgkb/doku.php?id=goobi:subregelsatz:start
 */
class DocumentTypes extends Enum
{
    /**
     * @var string
     */
    public const ARTICLE = 'article';
    /**
     * @var string
     */
    public const BINDING = 'binding';
    /**
     * @var string
     */
    public const BUNDLE = 'bundle';
    /**
     * @var string
     */
    public const COLOPHON = 'colophon';
    /**
     * @var string
     */
    public const CONTAINED_WORK = 'contained_work';
    /**
     * @var string
     */
    public const CORRIGENDA = 'corrigenda';
    /**
     * @var string
     */
    public const DEDICATION = 'dedication';
    /**
     * @var string
     */
    public const ENGRAVED_TITLEPAGE = 'engraved_titlepage';
    /**
     * @var string
     */
    public const FILE = 'file';
    /**
     * @var string
     */
    public const FOLDER = 'folder';
    /**
     * @var string
     */
    public const ILLUSTRATION = 'illustration';
    /**
     * @var string
     */
    public const INDEX = 'index';
    /**
     * @var string
     */
    public const ISSUE = 'issue';
    /**
     * @var string
     */
    public const MAP = 'map';
    /**
     * @var string
     */
    public const MONOGRAPH = 'monograph';
    /**
     * @var string
     */
    public const MULTIVOLUME_WORK = 'multivolume_work';
    /**
     * @var string
     */
    public const MUSICAL_NOTATION = 'musical_notation';
    /**
     * @var string
     */
    public const PERIODICAL = 'volume';
    /**
     * @var string
     */
    public const PREFACE = 'preface';
    /**
     * @var string
     */
    public const SECTION = 'section';
    /**
     * @var string
     */
    public const TABLE_OF_CONTENTS = 'contents';
    /**
     * @var string
     */
    public const TABLE = 'table';
    /**
     * @var string
     */
    public const TITLE_PAGE = 'title_page';
    /**
     * @var string
     */
    public const VOLUME = 'volume';

    /**
     * @var string
     */
    public const UNKNOWN = 'unknown';
}
