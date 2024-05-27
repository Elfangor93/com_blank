<?php
/**
****************************************************************************
**   @version    1.0.0                                                    **
**   @package    com_blank                                                **
**   @author     Manuel Häusler <tech.spuur@quickline.ch>                 **
**   @copyright  2023 Manuel Haeusler                                     **
**   @license    GNU General Public License version 3 or later            **
****************************************************************************/

namespace Elfangor93\Component\Blank\Administrator\Controller;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;

/**
 * Blank Controller
 *
 * @package Blankcomponent
 * @since   1.0.0
 */
class DisplayController extends BaseController
{
  /**
   * The default view.
   *
   * @var    string
   * @since  1.0.0
   */
  protected $default_view = 'panel';

  /**
   * Elfangor93\Component\Blank\Administrator\Extension\BlankComponent
   *
   * @var    object
   * @since  1.0.0
   */
  public $component;

  /**
   * Constructor.
   *
   * @param   array                $config   An optional associative array of configuration settings.
   * @param   MVCFactoryInterface  $factory  The factory.
   * @param   CMSApplication       $app      The application for the dispatcher
   * @param   Input                $input    Input
   *
   * @since   1.0.0
   */
  public function __construct($config = array(), $factory = null, $app = null, $input = null)
  {
    parent::__construct($config, $factory, $app, $input);

    $this->component = $this->app->bootComponent('com_blank');
  }

  /**
   * Typical view method for MVC based architecture
   *
   * This function is provide as a default implementation, in most cases
   * you will need to override it in your own controllers.
   *
   * @param   boolean  $cachable   If true, the view output will be cached
   * @param   array    $urlparams  An array of safe url parameters and their variable types, for valid values see {@link \JFilterInput::clean()}.
   *
   * @return  static  An instance of the current object to support chaining.
   *
   * @since   1.0.0
   */
  public function display($cachable = false, $urlparams = [])
  {
    return parent::display($cachable, $urlparams);
  }
}
