<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\Loader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\DelegatingLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Routing\\DelegatingLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\LoaderResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\LoaderResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\XmlFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\FileLocatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\YamlFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\PhpFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\GlobFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\DirectoryLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\ObjectRouteLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\DependencyInjection\\ServiceRouterLoader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\DirectoryRouteLoader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\RestRouteProcessor.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\RestRouteLoader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\Reader\\RestControllerReader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\Reader\\RestActionReader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Inflector\\InflectorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Inflector\\DoctrineInflector.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\RestYamlCollectionLoader.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Routing\\Loader\\RestXmlCollectionLoader.php';
include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Symfony\\Routing\\ApiLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\AnnotationClassLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Routing\\AnnotatedRouteControllerLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\AnnotationDirectoryLoader.php';

$a = ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))));
$b = new \Symfony\Component\Config\Loader\LoaderResolver();

$c = ($this->services['kernel'] ?? $this->get('kernel', 1));

$d = new \Symfony\Component\HttpKernel\Config\FileLocator($c, ($this->targetDirs[3].'\\src/Resources'), [0 => ($this->targetDirs[3].'\\src')]);
$e = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
$f = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());
$g = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($f);

$b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($d));
$b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($d));
$b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($d));
$b->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($d));
$b->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($d));
$b->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$b->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($d, $e));
$b->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $d, $a, new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($f, ($this->privates['fos_rest.request.param_fetcher.reader'] ?? $this->getFosRest_Request_ParamFetcher_ReaderService()), new \FOS\RestBundle\Inflector\DoctrineInflector(), false, ['json' => false, 'html' => true], true), $f), 'json'));
$b->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($d, $e, false, ['json' => false, 'html' => true], 'json'));
$b->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($d, $e, false, ['json' => false, 'html' => true], 'json'));
$b->addLoader(new \ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader($c, ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $this, $this->parameters['api_platform.formats'], $this->getParameter('api_platform.resource_class_directories'), ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService()), false, true, true));
$b->addLoader($g);
$b->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($d, $g));
$b->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($d, $g));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, $b, ['utf8' => true]);
