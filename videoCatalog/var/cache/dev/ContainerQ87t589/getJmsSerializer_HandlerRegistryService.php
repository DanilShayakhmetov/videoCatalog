<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.handler_registry' shared service.

return $this->services['jms_serializer.handler_registry'] = new \FOS\RestBundle\Serializer\JMSHandlerRegistry(${($_ = isset($this->services['fos_rest.serializer.jms_handler_registry.inner']) ? $this->services['fos_rest.serializer.jms_handler_registry.inner'] : $this->load('getFosRest_Serializer_JmsHandlerRegistry_InnerService.php')) && false ?: '_'});
