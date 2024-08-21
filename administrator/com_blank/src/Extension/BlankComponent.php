<?php
/**
****************************************************************************
**   @version    1.1.0                                                    **
**   @package    com_blank                                                **
**   @author     Manuel Häusler <tech.spuur@quickline.ch>                 **
**   @copyright  2024 Manuel Haeusler                                     **
**   @license    GNU General Public License version 3 or later            **
****************************************************************************/

namespace Elfangor93\Component\Blank\Administrator\Extension;

defined('_JEXEC') or die;

use Psr\Container\ContainerInterface;
use Joomla\CMS\Extension\MVCComponent;
use Joomla\CMS\Extension\BootableExtensionInterface;
use Joomla\CMS\Component\Router\RouterServiceInterface;
use Joomla\CMS\Component\Router\RouterServiceTrait;
use Joomla\CMS\HTML\HTMLRegistryAwareTrait;


/**
 * Component class for Blankcomponent
 *
 * @package Blankcomponent
 * @since   1.0.0
 */
class BlankComponent extends MVCComponent implements BootableExtensionInterface, RouterServiceInterface
{
  use RouterServiceTrait;
  use HTMLRegistryAwareTrait;

  /**
	 * Booting the extension. This is the function to set up the environment of the extension like
	 * registering new class loaders, etc.
	 *
	 * If required, some initial set up can be done from services of the container, eg.
	 * registering HTML services.
	 *
	 * @param   ContainerInterface  $container  The container
	 *
	 * @return  void
   *
	 * @since   1.0.0
	 */
  public function boot(ContainerInterface $container)
 	{
    // Do staff
  }
}
