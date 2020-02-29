<?php

declare(strict_types=1);

namespace LilleBitte\Extension\FrameworkExtension\Pass;

use LilleBitte\Container\ContainerBuilderInterface;
use LilleBitte\Container\CompilerPassInterface;
use LilleBitte\Routing\RouterFactory;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class RouterFactoryPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerBuilderInterface $container)
    {
        $container->instance($this->getTag(), RouterFactory::getRouter());
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'extension.framework.router_factory';
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociatedClass()
    {
        return RouterFactory::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getSerializedValue()
    {
        return 'RouterFactory::getRouter()';
    }
}
