<?php

declare(strict_types=1);

namespace LilleBitte\Extension\FrameworkExtension;

use LilleBitte\Container\ContainerBuilderInterface;
use LilleBitte\Kernel\Extension\Extension;

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
		$container->addCompilerPass(new Pass\EmitterPass());
		$container->addCompilerPass(new Pass\RequestPass());
		$container->addCompilerPass(new Pass\ResponsePass());
		$container->addCompilerPass(new Pass\RouterFactoryPass());
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
}
