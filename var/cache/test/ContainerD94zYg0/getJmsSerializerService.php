<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\SerializerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\ArrayTransformerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Serializer.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\SerializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\XmlSerializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\DeserializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\XmlDeserializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\ContextFactory\\SerializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\ContextFactory\\DeserializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer-bundle\\ContextFactory\\ConfiguredContextFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer(($this->privates['jms_serializer.metadata_factory'] ?? $this->load('getJmsSerializer_MetadataFactoryService.php')), [2 => ($this->privates['jms_serializer.deserialization_graph_navigator_factory'] ?? $this->load('getJmsSerializer_DeserializationGraphNavigatorFactoryService.php')), 1 => ($this->privates['jms_serializer.serialization_graph_navigator_factory'] ?? $this->load('getJmsSerializer_SerializationGraphNavigatorFactoryService.php'))], ['json' => ($this->privates['jms_serializer.json_serialization_visitor'] ?? $this->load('getJmsSerializer_JsonSerializationVisitorService.php')), 'xml' => ($this->privates['jms_serializer.xml_serialization_visitor'] ?? ($this->privates['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory()))], ['json' => ($this->privates['jms_serializer.json_deserialization_visitor'] ?? $this->load('getJmsSerializer_JsonDeserializationVisitorService.php')), 'xml' => ($this->privates['jms_serializer.xml_deserialization_visitor'] ?? ($this->privates['jms_serializer.xml_deserialization_visitor'] = new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()))], ($this->services['jms_serializer.serialization_context_factory'] ?? ($this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->services['jms_serializer.deserialization_context_factory'] ?? ($this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
