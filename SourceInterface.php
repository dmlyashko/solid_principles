<?php

interface SourceInterface
{
    /**
     * Returns input operands.
     *
     * @return array
     */
    public function getInput();

    /**
     * Returns operation type.
     *
     * @return string
     */
    public function getOperationType();
}
