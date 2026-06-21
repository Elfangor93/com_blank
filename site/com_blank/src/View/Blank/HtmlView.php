<?php
/**
****************************************************************************
**   @version    2.1.0                                                    **
**   @package    com_blank                                                **
**   @author     Manuel Häusler <tech.spuur@quickline.ch>                 **
**   @copyright  2026 Manuel Haeusler                                     **
**   @license    GNU General Public License version 3 or later            **
****************************************************************************/

namespace Elfangor93\Component\Blank\Site\View\Blank;

// No direct access
defined('_JEXEC') or die;

use \Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use \Joomla\CMS\Language\Text;
use \Joomla\CMS\Factory;

/**
 * HTML View class for the default view
 * 
 * @package Blankcomponent
 * @since   1.0.0
 */
class HtmlView extends BaseHtmlView
{
  /**
   * The model state
   *
   * @var   \Joomla\CMS\Object\CMSObject
   */
  protected $state;

  /**
   * The page parameters
   *
   * @var    \Joomla\Registry\Registry|null
   */
  protected $params = null;

	/**
	 * Display the view
	 *
	 * @param   string  $tpl  Template name
	 *
	 * @return void
	 */
	public function display($tpl = null)
	{
    $app   = Factory::getApplication();
		$menu  = $app->getMenu()->getActive();
    $model = $this->getModel();
		$title = null;
    
    $this->state  = $model->getState();
    $this->params = $model->getParams();

    // Page heading
    if($menu)
		{
			$this->params['menu']->def('page_heading', $this->params['menu']->get('page_title', $menu->title));
		}
		else
		{
			$this->params['menu']->def('page_heading', Text::_('COM_BLANK'));
		}

    // Page title
    $title = $this->params['menu']->get('page_title', '');
    if(empty($title))
		{
			$title = Text::_('COM_BLANK_BLANK_PAGE');
		}
    $this->getDocument()->setTitle($title);

    // HTML meta data
		if($this->params['menu']->get('menu-meta_description'))
		{
			$this->getDocument()->setDescription($this->params['menu']->get('menu-meta_description'));
		}
		if($this->params['menu']->get('menu-meta_keywords'))
		{
			$this->getDocument()->setMetadata('keywords', $this->params['menu']->get('menu-meta_keywords'));
		}
		if($this->params['menu']->get('robots'))
		{
			$this->getDocument()->setMetadata('robots', $this->params['menu']->get('robots'));
		}
	}
}
