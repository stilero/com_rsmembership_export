<?php
/**
 * DAshboard Layout
 *
 * @version  1.0
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2013-feb-24 Stilero Webdesign (www.stilero.com)
 * @category layout
 * @license	GPLv2
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
define('RSMEMBEXP_URL', 'index.php?option=com_rsmembershipexport&view=export&format=raw');
define('RSMEMBEXP_ICON', JURI::base().'templates/bluestork/images/header/icon-48-stats.png');
?>
    <div class="cpanel">
        <div class="icon-wrapper">
            <div class="icon">
                <a class="modal" href="<?php echo RSMEMBEXP_URL; ?>&show=all" rel="{handler: 'iframe', size: {x: 800, y: 550}, onClose: function() {}}">
                    <img src="<?php echo RSMEMBEXP_ICON;?>" alt=""  />
                    <span><?php echo JText::_('COM_RSMEMBERSHIPEXPORT_ALL_MEMBERS'); ?></span>
                </a>
            </div>
        </div>
        <div class="icon-wrapper">
            <div class="icon">
                <a class="modal" href="<?php echo RSMEMBEXP_URL; ?>&show=active" rel="{handler: 'iframe', size: {x: 800, y: 550}, onClose: function() {}}">
                    <img src="<?php echo RSMEMBEXP_ICON;?>" alt=""  />
                    <span><?php echo JText::_('COM_RSMEMBERSHIPEXPORT_ACTIVE_MEMBERS'); ?></span>
                </a>
            </div>
        </div>
        <div class="icon-wrapper">
            <div class="icon">
                <a class="modal" href="<?php echo RSMEMBEXP_URL; ?>&show=expired" rel="{handler: 'iframe', size: {x: 800, y: 550}, onClose: function() {}}">
                    <img src="<?php echo RSMEMBEXP_ICON;?>" alt=""  />
                    <span><?php echo JText::_('COM_RSMEMBERSHIPEXPORT_INACTIVE_MEMBERS'); ?></span>
                </a>
            </div>
        </div>
    </div>

