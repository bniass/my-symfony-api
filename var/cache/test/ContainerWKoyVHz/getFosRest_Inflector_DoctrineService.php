<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.inflector.doctrine' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Inflector\\InflectorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Inflector\\DoctrineInflector.php';

return $this->privates['fos_rest.inflector.doctrine'] = new \FOS\RestBundle\Inflector\DoctrineInflector();
