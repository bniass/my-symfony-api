<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.extension.logout_url' shared service.

include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\LogoutUrlExtension.php';

return $this->privates['twig.extension.logout_url'] = new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
