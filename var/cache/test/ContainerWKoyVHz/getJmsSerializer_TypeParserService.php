<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.type_parser' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

return $this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser();
