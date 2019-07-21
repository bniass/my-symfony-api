<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.expression_language' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\expression-language\\ExpressionFunctionProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer-bundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider.php';

$this->privates['jms_serializer.expression_language'] = $instance = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();

$instance->registerProvider(($this->privates['jms_serializer.expression_language.function_provider'] ?? ($this->privates['jms_serializer.expression_language.function_provider'] = new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider())));

return $instance;
