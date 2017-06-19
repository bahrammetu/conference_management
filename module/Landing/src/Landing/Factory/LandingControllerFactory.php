<?php

namespace Landing\Factory;

use Landing\Controller\LandingController;
use Landing\Model\UserTableInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class LandingControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return ListController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new LandingController($container->get(UserTableInterface::class));
    }
}