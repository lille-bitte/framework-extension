<?php

declare(strict_types=1);

namespace LilleBitte\Extension\FrameworkExtension;

use LilleBitte\Container\ContainerBuilderInterface;
use LilleBitte\Extension\FrameworkExtension\Pass\EmitterPass;
use LilleBitte\Extension\FrameworkExtension\Pass\RequestPass;
use LilleBitte\Extension\FrameworkExtension\Pass\ResponsePass;
use LilleBitte\Extension\FrameworkExtension\Pass\RouterFactoryPass;
use LilleBitte\Kernel\Extension\Extension;
use LilleBitte\Routing\Annotation\Route;
use LilleBitte\Routing\Annotation\Method;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class FrameworkExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilderInterface $container)
    {
        $container->addCompilerPass(new EmitterPass());
        $container->addCompilerPass(new RequestPass());
        $container->addCompilerPass(new ResponsePass());
        $container->addCompilerPass(new RouterFactoryPass());
    }

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function terminate()
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function getAnnotationClasses()
    {
        return [
            Route::class,
            Method::class
        ];
    }
}
