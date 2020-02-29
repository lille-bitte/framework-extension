<?php

declare(strict_types=1);

namespace LilleBitte\Extension\FrameworkExtension\Pass;

use LilleBitte\Container\ContainerBuilderInterface;
use LilleBitte\Container\CompilerPassInterface;
use LilleBitte\Messenger\Response;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class ResponsePass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerBuilderInterface $container)
    {
        $container->instance($this->getTag(), new Response());
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'extension.framework.response';
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociatedClass()
    {
        return Response::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getSerializedValue()
    {
        return 'new Response()';
    }
}
