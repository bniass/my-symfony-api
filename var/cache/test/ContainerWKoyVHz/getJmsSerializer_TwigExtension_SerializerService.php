<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.twig_extension.serializer' shared service.

include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Twig\\SerializerRuntimeExtension.php';

return $this->privates['jms_serializer.twig_extension.serializer'] = new \JMS\Serializer\Twig\SerializerRuntimeExtension();
