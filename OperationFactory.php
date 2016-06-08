<?php

use Operation\Addition;
use Operation\Substraction;

class OperationFactory
{
    /** @var string */
    const OPERATION_ADDITION = 'addition';

    /** @var string */
    const OPERATION_SUBSTRACTION = 'substraction';

    /**
     * @param string $operationType
     *
     * @return null|Addition|Substraction
     * @throws Exception
     */
    public static function getOperation($operationType)
    {
        $operation = null;

        switch ($operationType) {
            case static::OPERATION_ADDITION:
                $operation = new Addition();
                break;
            case static::OPERATION_SUBSTRACTION:
                $operation = new Substraction();
                break;
            default:
                throw new Exception('Unsupported operation');
                break;
        }

        return $operation;
    }
}
