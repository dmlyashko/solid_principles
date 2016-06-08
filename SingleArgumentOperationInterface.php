<?php

abstract class SingleArgumentOperation implements OperationInterface
{
    protected $arguments = array();

    /**
     * @inheritDoc
     */
    abstract function perform();

    public function setArguments(array $arguments)
    {
        if (count($arguments) <> 1) {
            throw new Exception('Operation' . __CLASS__ . ' accepts only one argument');
        }

        $this->arguments = $arguments;
    }
}