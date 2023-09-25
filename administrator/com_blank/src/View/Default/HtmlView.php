<?php
/**
****************************************************************************
**   @version    1.0.0                                                    **
**   @package    com_blank                                                **
**   @author     Manuel Häusler <tech.spuur@quickline.ch>                 **
**   @copyright  2023 Manuel Haeusler                                     **
**   @license    GNU General Public License version 3 or later            **
****************************************************************************/

namespace Elfangor93\Component\Blank\Administrator\View\Default;

// No direct access
defined('_JEXEC') or die;

use \Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use \Joomla\CMS\Toolbar\Toolbar;
use \Joomla\CMS\Toolbar\ToolbarHelper;
use \Joomla\CMS\Language\Text;
use \Joomla\CMS\HTML\Helpers\Sidebar;

/**
 * HTML View class for the default view
 *
 * @package Blankcomponent
 * @since   1.0.0
 */
class HtmlView extends BaseHtmlView
{
	public function display($tpl = null)
	{
    ToolbarHelper::title(Text::_('COM_BLANK_DEFAULT_VIEW'), "wrench");

		$this->sidebar = Sidebar::render();
		parent::display($tpl);

    // Set sidebar action
		Sidebar::setAction('index.php?option=com_blank&view=default');
	}
}
