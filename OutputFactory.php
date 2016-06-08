<?php

use Output\ConsoleOutput;
use Output\FileOutput;
use Output\WebOutput;

class OutputFactory
{
    /** @var string */
    const OUTPUT_CONSOLE = 'console';

    /** @var string */
    const OUTPUT_FILE = 'file';

    /** @var string */
    const OUTPUT_WEB = 'web';

    /**
     * @param string $outputType
     *
     * @return OutputInterface
     * @throws Exception
     */
    public static function getOutput($outputType)
    {
        $source = null;

        switch ($outputType) {
            case static::OUTPUT_CONSOLE:
                $output = new ConsoleOutput();
                break;
            case static::OUTPUT_FILE:
                $output = new FileOutput();
                break;
            case static::OUTPUT_WEB:
                $output = new WebOutput();
                break;
            default:
                throw new Exception('Unknown output type');
                break;
        }

        return $output;
    }
}
