<?php

namespace LilleBitte\Extension\FrameworkExtension\Controller;

use LilleBitte\Container\ContainerInterface;
use LilleBitte\Kernel\Controller\ControllerInterface;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
abstract class AbstractController implements ControllerInterface
{
	/**
	 * @var ContainerInterface
	 */
	private $container;

	/**
	 * {@inheritdoc}
	 */
	public function setContainer(ContainerInterface $container)
	{
		$this->container = $container;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getContainer()
	{
		return $this->container;
	}
}
