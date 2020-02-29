<?php

declare(strict_types=1);

namespace LilleBitte\Extension\FrameworkExtension\Pass;

use LilleBitte\Container\ContainerBuilderInterface;
use LilleBitte\Container\CompilerPassInterface;
use LilleBitte\Messenger\Request;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class RequestPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerBuilderInterface $container)
    {
        $container->instance($this->getTag(), new Request());
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'extension.framework.request';
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociatedClass()
    {
        return Request::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getSerializedValue()
    {
        return 'new Request()';
    }
}
