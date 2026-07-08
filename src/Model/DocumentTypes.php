<?php

declare(strict_types=1);

namespace Subugoe\IIIFModel\Model;

/**
 * @see http://dfg-viewer.de/strukturdatenset/
 * We only use a small subset as defined some specifications
 * on http://www.eromm.org/dcgkb/doku.php?id=goobi:subregelsatz:start
 */
enum DocumentTypes
{
    /**
     * @var string
     */
    public const string ARTICLE = 'article';

    /**
     * @var string
     */
    public const string BINDING = 'binding';

    /**
     * @var string
     */
    public const string BUNDLE = 'bundle';

    /**
     * @var string
     */
    public const string COLOPHON = 'colophon';

    /**
     * @var string
     */
    public const string CONTAINED_WORK = 'contained_work';

    /**
     * @var string
     */
    public const string CORRIGENDA = 'corrigenda';

    /**
     * @var string
     */
    public const string DEDICATION = 'dedication';

    /**
     * @var string
     */
    public const string ENGRAVED_TITLEPAGE = 'engraved_titlepage';

    /**
     * @var string
     */
    public const string FILE = 'file';

    /**
     * @var string
     */
    public const string FOLDER = 'folder';

    /**
     * @var string
     */
    public const string ILLUSTRATION = 'illustration';

    /**
     * @var string
     */
    public const string INDEX = 'index';

    /**
     * @var string
     */
    public const string ISSUE = 'issue';

    /**
     * @var string
     */
    public const string MAP = 'map';

    /**
     * @var string
     */
    public const string MONOGRAPH = 'monograph';

    /**
     * @var string
     */
    public const string MULTIVOLUME_WORK = 'multivolume_work';

    /**
     * @var string
     */
    public const string MUSICAL_NOTATION = 'musical_notation';

    /**
     * @var string
     */
    public const string PERIODICAL = 'volume';

    /**
     * @var string
     */
    public const string PREFACE = 'preface';

    /**
     * @var string
     */
    public const string SECTION = 'section';

    /**
     * @var string
     */
    public const string TABLE_OF_CONTENTS = 'contents';

    /**
     * @var string
     */
    public const string TABLE = 'table';

    /**
     * @var string
     */
    public const string TITLE_PAGE = 'title_page';

    /**
     * @var string
     */
    public const string VOLUME = 'volume';

    /**
     * @var string
     */
    public const string UNKNOWN = 'unknown';
}
