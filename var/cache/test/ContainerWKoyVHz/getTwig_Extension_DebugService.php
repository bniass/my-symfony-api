<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.extension.debug' shared service.

include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\DebugExtension.php';

return $this->privates['twig.extension.debug'] = new \Twig\Extension\DebugExtension();