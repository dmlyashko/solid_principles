<?php

abstract class DoubleArgumentsOperation implements OperationInterface
{
    /** @var array */
    protected $arguments;

    /**
     * @inheritDoc
     */
    abstract function perform();

    public function setArguments(array $arguments)
    {
        if (count($arguments) <> 2) {
            throw new Exception('Operation' . __CLASS__ . ' accepts only two arguments');
        }

        $this->arguments = $arguments;
    }
}
