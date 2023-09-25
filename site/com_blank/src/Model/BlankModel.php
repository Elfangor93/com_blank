<?php
/**
****************************************************************************
**   @version    1.0.0                                                    **
**   @package    com_blank                                                **
**   @author     Manuel Häusler <tech.spuur@quickline.ch>                 **
**   @copyright  2023 Manuel Haeusler                                     **
**   @license    GNU General Public License version 3 or later            **
****************************************************************************/

namespace Elfangor93\Component\Blank\Site\Model;

// No direct access
defined('_JEXEC') or die;

use \Joomla\CMS\Factory;
use \Joomla\Registry\Registry;
use \Joomla\CMS\MVC\Model\BaseDatabaseModel;

/**
 * Model for the blank view
 *
 * @package Blankcomponent
 * @since   1.0.0
 */
class BlankModel extends BaseDatabaseModel
{
  /**
   * Joomla application class
   *
   * @access  protected
   * @var     Joomla\CMS\Application\AdministratorApplication
   */
  protected $app;

  /**
   * Extension calss
   *
   * @access  protected
   * @var     Object
   */
  protected $component;

  /**
	 * Constructor
	 *
	 * @param   array                $config   An array of configuration options (name, state, dbo, table_path, ignore_request).
	 * @param   MVCFactoryInterface  $factory  The factory.
	 *
	 * @since   1.0.0
	 * @throws  \Exception
	 */
	public function __construct($config = [], $factory = null)
  {
    parent::__construct($config, $factory);

    $this->app       = Factory::getApplication('site');
    $this->component = $this->app->bootComponent('com_blank');
  }

  /**
	 * Method to get parameters from model state.
	 *
	 * @return  Registry[]   List of parameters
   * @since   1.0.0
	 */
	public function getParams(): array
	{
		$params = array('component' => $this->getState('parameters.component'),
										'menu'      => $this->getState('parameters.menu')
									 );

		return $params;
	}	

  /**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 *
	 * @throws Exception
	 */
	protected function populateState()
	{
    // Load the parameters.
    $params = Factory::getApplication('com_blank')->getParams();
    $this->setState('parameters.component', $params);
  }
}
