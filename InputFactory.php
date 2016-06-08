<?php

class InputFactory
{
    /**
     * @var SourceInterface
     */
	protected $source;

    /**
     * @param SourceInterface $source
     */
	public function __construct(SourceInterface $source)
	{
         $this->source = $source;		
	}

    /**
     * @return array
     */
	public function getArguments()
	{
		 return $this->source->getInput();
	}

    /**
     * @return string
     */
    public function getOperationType()
    {
        return $this->source->getOperationType();
    }
}
