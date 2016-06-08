<?php

use Source\ConsoleSource;
use Source\FileSource;
use Source\WebSource;

class SourceFactory
{
    /** @var string */
    const CONSOLE_TYPE = 'console';

    /** @var string */
    const WEB_TYPE = 'web';

    /** @var string */
    const FILE_TYPE = 'file';

    /**
     * @param $sourceType
     *
     * @return SourceInterface
     * @throws Exception
     */
    public static function getSource($sourceType)
    {
        $source = null;

        switch ($sourceType) {
            case static::CONSOLE_TYPE:
                $source = new ConsoleSource();
                break;
            case static::FILE_TYPE:
                $source = new FileSource();
                break;
            case static::WEB_TYPE:
                $source = new WebSource();
                break;
            default:
                throw new Exception('Unknown source type');
                break;
        }

        return $source;
    }
}
