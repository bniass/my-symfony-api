<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.profile' shared service.

include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Profiler\\Profile.php';

return $this->privates['twig.profile'] = new \Twig\Profiler\Profile();
