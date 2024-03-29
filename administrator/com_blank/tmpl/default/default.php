<?php
/**
****************************************************************************
**   @version    1.0.0                                                    **
**   @package    com_blank                                                **
**   @author     Manuel Häusler <tech.spuur@quickline.ch>                 **
**   @copyright  2023 Manuel Haeusler                                     **
**   @license    GNU General Public License version 3 or later            **
****************************************************************************/

// No direct access
defined('_JEXEC') or die;

use \Joomla\CMS\Language\Text;
?>

<div class="com_blank">
    <h1><?php echo Text::_('COM_BLANK'); ?></h1>
    <br />
    <p><?php echo Text::_('COM_BLANK_BLANK_PAGE_DESC'); ?></p>
    <br />
    <h2><?php echo Text::_('COM_BLANK_BLANK_DONATE_TITLE'); ?></h2>
    <p><?php echo Text::_('COM_BLANK_BLANK_DONATE_DESC'); ?></p>
    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=C28HUM53S6EC2" class="btn btn-primary" target="_blank"><?php echo Text::_('COM_BLANK_BLANK_DONATE_BTN'); ?></a>
    <a href="https://github.com/Elfangor93/com_blank" class="btn btn-primary" target="_blank"><?php echo Text::_('COM_BLANK_BLANK_LINK_TO_GITHUB'); ?></a>
</div>