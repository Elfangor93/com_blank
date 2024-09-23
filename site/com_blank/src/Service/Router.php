<?php
/**
****************************************************************************
**   @version    2.0.0                                                    **
**   @package    com_blank                                                **
**   @author     Manuel Häusler <tech.spuur@quickline.ch>                 **
**   @copyright  2024 Manuel Haeusler                                     **
**   @license    GNU General Public License version 3 or later            **
****************************************************************************/

namespace Elfangor93\Component\Blank\Site\Service;

use Joomla\CMS\Menu\AbstractMenu;
use Joomla\CMS\Application\SiteApplication;
use Joomla\CMS\Component\Router\RouterView;
use Joomla\CMS\Component\Router\RouterViewConfiguration;
use Joomla\CMS\Component\Router\Rules\MenuRules;
use Joomla\CMS\Component\Router\Rules\NomenuRules;
use Joomla\CMS\Component\Router\Rules\StandardRules;


\defined('_JEXEC') or die;

/**
 * Routing class from com_blank
 *
 * @since  1.0.0
 */
class Router extends RouterView
{
  /**
   * Users Component router constructor
   *
   * @param   SiteApplication  $app   The application object
   * @param   AbstractMenu     $menu  The menu object to work with
   */
  public function __construct(SiteApplication $app, AbstractMenu $menu)
  {
    $this->registerView(new RouterViewConfiguration('blank'));

    parent::__construct($app, $menu);

    $this->attachRule(new MenuRules($this));
    $this->attachRule(new StandardRules($this));
    $this->attachRule(new NomenuRules($this));
  }
}
