<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'twig' shared service.

include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Environment.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\ExpressionExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\DebugExtension.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Twig\\SerializerRuntimeExtension.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php';

$this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.native_filesystem'] ?? $this->load('getTwig_Loader_NativeFilesystemService.php')), ['default_path' => ($this->targetDirs[3].'/templates'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception::showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'paths' => [], 'date' => ['format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL], 'number_format' => ['decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',']]);

$instance->addExtension(($this->privates['twig.extension.security_csrf'] ?? ($this->privates['twig.extension.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfExtension())));
$instance->addExtension(($this->privates['twig.extension.profiler'] ?? $this->load('getTwig_Extension_ProfilerService.php')));
$instance->addExtension(($this->privates['twig.extension.trans'] ?? ($this->privates['twig.extension.trans'] = new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL))));
$instance->addExtension(($this->privates['twig.extension.assets'] ?? $this->load('getTwig_Extension_AssetsService.php')));
$instance->addExtension(($this->privates['twig.extension.code'] ?? $this->load('getTwig_Extension_CodeService.php')));
$instance->addExtension(($this->privates['twig.extension.routing'] ?? $this->load('getTwig_Extension_RoutingService.php')));
$instance->addExtension(($this->privates['twig.extension.yaml'] ?? ($this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension())));
$instance->addExtension(($this->privates['twig.extension.debug.stopwatch'] ?? $this->load('getTwig_Extension_Debug_StopwatchService.php')));
$instance->addExtension(($this->privates['twig.extension.expression'] ?? ($this->privates['twig.extension.expression'] = new \Symfony\Bridge\Twig\Extension\ExpressionExtension())));
$instance->addExtension(($this->privates['twig.extension.httpkernel'] ?? ($this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension())));
$instance->addExtension(($this->privates['twig.extension.httpfoundation'] ?? $this->load('getTwig_Extension_HttpfoundationService.php')));
$instance->addExtension(($this->privates['twig.extension.weblink'] ?? $this->load('getTwig_Extension_WeblinkService.php')));
$instance->addExtension(($this->privates['twig.extension.form'] ?? ($this->privates['twig.extension.form'] = new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']))));
$instance->addExtension(($this->privates['twig.extension.logout_url'] ?? $this->load('getTwig_Extension_LogoutUrlService.php')));
$instance->addExtension(($this->privates['twig.extension.security'] ?? $this->load('getTwig_Extension_SecurityService.php')));
$instance->addExtension(($this->privates['twig.extension.debug'] ?? ($this->privates['twig.extension.debug'] = new \Twig\Extension\DebugExtension())));
$instance->addExtension(($this->privates['jms_serializer.twig_extension.serializer'] ?? ($this->privates['jms_serializer.twig_extension.serializer'] = new \JMS\Serializer\Twig\SerializerRuntimeExtension())));
$instance->addExtension(($this->privates['doctrine.twig.doctrine_extension'] ?? ($this->privates['doctrine.twig.doctrine_extension'] = new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension())));
$instance->addGlobal('app', ($this->privates['twig.app_variable'] ?? $this->load('getTwig_AppVariableService.php')));
$instance->addRuntimeLoader(($this->privates['twig.runtime_loader'] ?? $this->load('getTwig_RuntimeLoaderService.php')));
($this->privates['twig.configurator.environment'] ?? $this->load('getTwig_Configurator_EnvironmentService.php'))->configure($instance);

return $instance;
