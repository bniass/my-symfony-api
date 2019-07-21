<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'twig' shared service.

include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Environment.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\ExistsLoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\SourceContextLoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\FilesystemLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\Loader\\NativeFilesystemLoader.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfExtension.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\ProfilerExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Profiler\\Profile.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\AssetExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Packages.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\PackageInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Package.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\PathPackage.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\VersionStrategy\\VersionStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\VersionStrategy\\EmptyVersionStrategy.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Context\\ContextInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Context\\RequestStackContext.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\CodeExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\RoutingExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\StopwatchExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\ExpressionExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\UrlHelper.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\WebLinkExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\LogoutUrlExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\SecurityExtension.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\DebugExtension.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Twig\\SerializerRuntimeExtension.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\AppVariable.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\RuntimeLoader\\RuntimeLoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\RuntimeLoader\\ContainerRuntimeLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';

$a = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader([], $this->targetDirs[3]);
$a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
$a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
$a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), 'Twig');
$a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), '!Twig');
$a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\security-bundle/Resources/views'), 'Security');
$a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\security-bundle/Resources/views'), '!Security');
$a->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
$a->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
$a->addPath(($this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Symfony\\Bundle/Resources/views'), 'ApiPlatform');
$a->addPath(($this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Symfony\\Bundle/Resources/views'), '!ApiPlatform');
$a->addPath(($this->targetDirs[3].'/templates'));
$a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bridge/Resources/views/Form'));

$this->services['twig'] = $instance = new \Twig\Environment($a, ['default_path' => ($this->targetDirs[3].'/templates'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception::showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'paths' => [], 'date' => ['format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL], 'number_format' => ['decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',']]);

$b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
$c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
$d = new \Symfony\Bridge\Twig\AppVariable();
$d->setEnvironment('dev');
$d->setDebug(true);
if ($this->has('security.token_storage')) {
    $d->setTokenStorage(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
}
if ($this->has('request_stack')) {
    $d->setRequestStack($c);
}

$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), $b));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($c, '', false)), [])));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), $this->targetDirs[3], 'UTF-8'));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($c, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
$instance->addExtension(new \Twig\Extension\DebugExtension());
$instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
$instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
$instance->addGlobal('app', $d);
$instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => ['services', 'jms_serializer.twig_extension.serializer_runtime_helper', 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php', true],
    'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
    'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
    'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
], [
    'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => '?',
    'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
    'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
    'Symfony\\Component\\Form\\FormRenderer' => '?',
])));
(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

return $instance;