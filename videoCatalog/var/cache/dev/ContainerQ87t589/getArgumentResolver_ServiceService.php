<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('AppBundle\\Controller\\VideoController:setViewHandler' => function () {
    return ${($_ = isset($this->services['service_locator.r15f9hk']) ? $this->services['service_locator.r15f9hk'] : $this->load('getServiceLocator_R15f9hkService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\VideoController::setViewHandler' => function () {
    return ${($_ = isset($this->services['service_locator.r15f9hk']) ? $this->services['service_locator.r15f9hk'] : $this->load('getServiceLocator_R15f9hkService.php')) && false ?: '_'};
})));
