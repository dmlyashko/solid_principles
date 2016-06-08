<?php

$calculator = new Calculator();
$inputFactory = new InputFactory(SourceFactory::getSource(SourceFactory::CONSOLE_TYPE));
$arguments = $inputFactory->getArguments();
$calculator->setOperation(OperationFactory::getOperation($inputFactory->getOperationType()));
$result = $calculator->calculate($arguments);
$output = OutputFactory::getOutput(OutputFactory::OUTPUT_CONSOLE);
$output->write($result);



