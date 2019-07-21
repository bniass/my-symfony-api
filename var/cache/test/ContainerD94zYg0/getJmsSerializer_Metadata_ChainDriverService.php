<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.metadata.chain_driver' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Driver\\DriverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedDriverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Driver\\DriverChain.php';

return $this->privates['jms_serializer.metadata.chain_driver'] = new \Metadata\Driver\DriverChain([0 => ($this->privates['jms_serializer.metadata.yaml_driver'] ?? $this->load('getJmsSerializer_Metadata_YamlDriverService.php')), 1 => ($this->privates['jms_serializer.metadata.xml_driver'] ?? $this->load('getJmsSerializer_Metadata_XmlDriverService.php')), 2 => ($this->privates['jms_serializer.metadata.annotation_driver'] ?? $this->load('getJmsSerializer_Metadata_AnnotationDriverService.php'))]);
