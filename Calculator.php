<?php

class Calculator
{
	/** @var OperationInterface */
	protected $operation;

    /**
     * @param OperationInterface $operation
     */
	public function setOperation(OperationInterface $operation)
	{
 		$this->operation = $operation;
	}

    /**
     * @param array $arguments
     *
     * @return float|int
     */
	public function calculate($arguments)
	{
		$this->operation->setArguments($arguments);
        $result = $this->operation->perform();

        return $result;
	}
}