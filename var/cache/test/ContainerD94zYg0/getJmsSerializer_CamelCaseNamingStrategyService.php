<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.camel_case_naming_strategy' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Naming\\PropertyNamingStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Naming\\CamelCaseNamingStrategy.php';

return $this->privates['jms_serializer.camel_case_naming_strategy'] = new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true);