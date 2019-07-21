<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.serialization_graph_navigator_factory' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\GraphNavigator\\Factory\\GraphNavigatorFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\GraphNavigator\\Factory\\SerializationGraphNavigatorFactory.php';

return $this->privates['jms_serializer.serialization_graph_navigator_factory'] = new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory(($this->privates['jms_serializer.metadata_factory'] ?? $this->load('getJmsSerializer_MetadataFactoryService.php')), ($this->services['fos_rest.serializer.jms_handler_registry'] ?? $this->load('getFosRest_Serializer_JmsHandlerRegistryService.php')), ($this->privates['jms_serializer.accessor_strategy.default'] ?? $this->load('getJmsSerializer_AccessorStrategy_DefaultService.php')), ($this->privates['jms_serializer.event_dispatcher'] ?? $this->load('getJmsSerializer_EventDispatcherService.php')), ($this->privates['jms_serializer.expression_evaluator'] ?? $this->load('getJmsSerializer_ExpressionEvaluatorService.php')));