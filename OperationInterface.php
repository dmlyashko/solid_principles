<?php

interface OperationInterface
{
    /**
     * @return int|float
     */
    public function perform();

    public function setArguments(array $arguments);
}
