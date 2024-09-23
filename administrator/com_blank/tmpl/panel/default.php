<?php
/**
****************************************************************************
**   @version    2.0.0                                                    **
**   @package    com_blank                                                **
**   @author     Manuel Häusler <tech.spuur@quickline.ch>                 **
**   @copyright  2024 Manuel Haeusler                                     **
**   @license    GNU General Public License version 3 or later            **
****************************************************************************/

// No direct access
defined('_JEXEC') or die;

use \Joomla\CMS\Language\Text;
?>
<style>
    .img-wrapper a[target="_blank"]::before {content:""!important;padding:0!important;}
    .img-wrapper img {max-width:100%;max-height:250px;}
</style>

<div class="com_blank">
    <h1><?php echo Text::_('COM_BLANK'); ?></h1>
    <br />
    <div class="row">
        <div class="txt-wrapper col-9">
                <p><?php echo Text::_('COM_BLANK_BLANK_PAGE_DESC'); ?></p>
                <br />
                <h2><?php echo Text::_('COM_BLANK_BLANK_DONATE_TITLE'); ?></h2>
                <p><?php echo Text::_('COM_BLANK_BLANK_DONATE_DESC'); ?></p>
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=C28HUM53S6EC2" class="btn btn-primary" target="_blank"><?php echo Text::_('COM_BLANK_BLANK_DONATE_BTN'); ?></a>
                <a href="https://github.com/Elfangor93/com_blank" class="btn btn-primary" target="_blank"><?php echo Text::_('COM_BLANK_BLANK_LINK_TO_GITHUB'); ?></a>
        </div>
        <div class="img-wrapper col-3 text-center">
            <a href="https://tech.spuur.ch" target="_blank"><img src="https://tech.spuur.ch/images/symbols/logo_cpl.png" alt="Logo Tech.Spuur"></a>
        </div>
    </div>
</div>
