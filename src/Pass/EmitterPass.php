<?php

declare(strict_types=1);

namespace LilleBitte\Extension\FrameworkExtension\Pass;

use LilleBitte\Container\ContainerBuilderInterface;
use LilleBitte\Container\CompilerPassInterface;
use LilleBitte\Emitter\Emitter;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class EmitterPass implements CompilerPassInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function __invoke(ContainerBuilderInterface $container)
	{
		$container->instance($this->getTag(), new Emitter());
	}

	/**
	 * {@inheritdoc}
	 */
	public function getTag()
	{
		return 'extension.framework.emitter';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAssociatedClass()
	{
		return Emitter::class;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getSerializedValue()
	{
		return 'new Emitter()';
	}
}
