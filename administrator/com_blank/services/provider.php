<?php
/**
****************************************************************************
**   @version    1.0.0                                                    **
**   @package    com_blank                                                **
**   @author     Manuel Häusler <tech.spuur@quickline.ch>                 **
**   @copyright  2023 Manuel Haeusler                                     **
**   @license    GNU General Public License version 3 or later            **
****************************************************************************/

defined('_JEXEC') or die;

use Joomla\CMS\Component\Router\RouterFactoryInterface;
use Joomla\CMS\Extension\Service\Provider\RouterFactory;
use Joomla\CMS\Dispatcher\ComponentDispatcherFactoryInterface;
use Joomla\CMS\Extension\Service\Provider\ComponentDispatcherFactory;
use Joomla\CMS\Extension\Service\Provider\MVCFactory;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;
use Joomla\CMS\HTML\Registry;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\CMS\Extension\ComponentInterface;
use Elfangor93\Component\Blank\Administrator\Extension\BlankComponent;


/**
 * The blank component service provider.
 *
 * @package Blankcomponent
 * @since  1.0.0
 */
return new class implements ServiceProviderInterface
{
	/**
	 * Registers the service provider with a DI container.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function register(Container $container)
	{
		$container->registerServiceProvider(new MVCFactory('\\Elfangor93\\Component\\Blank'));
		$container->registerServiceProvider(new ComponentDispatcherFactory('\\Elfangor93\\Component\\Blank'));
		$container->registerServiceProvider(new RouterFactory('\\Elfangor93\\Component\\Blank'));

		$container->set(
			ComponentInterface::class,
			function (Container $container)
			{
				$component = new BlankComponent($container->get(ComponentDispatcherFactoryInterface::class));

				$component->setRegistry($container->get(Registry::class));
				$component->setMVCFactory($container->get(MVCFactoryInterface::class));
				$component->setRouterFactory($container->get(RouterFactoryInterface::class));

				return $component;
			}
		);
	}
};
