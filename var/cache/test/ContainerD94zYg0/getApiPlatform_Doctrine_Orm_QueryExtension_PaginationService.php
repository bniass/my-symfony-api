<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.doctrine.orm.query_extension.pagination' shared service.

include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Doctrine\\Orm\\Extension\\QueryCollectionExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Doctrine\\Orm\\Extension\\QueryResultCollectionExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Doctrine\\Orm\\Extension\\ContextAwareQueryResultCollectionExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Doctrine\\Orm\\Extension\\PaginationExtension.php';

return $this->privates['api_platform.doctrine.orm.query_extension.pagination'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.pagination'] ?? $this->load('getApiPlatform_PaginationService.php')));
