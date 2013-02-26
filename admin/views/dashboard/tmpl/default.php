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
?>
    <div class="cpanel">
        <div class="icon-wrapper">
            <div class="icon">
                <a class="modal" href="<?php echo RSMEMBEXP_URL; ?>&show=all" rel="{handler: 'iframe', size: {x: 800, y: 550}, onClose: function() {}}">
                    <img src="/joomla25/administrator/templates/bluestork/images/header/icon-48-stats.png" alt=""  />
                    <span>Download All Members</span>
                </a>
            </div>
        </div>
        <div class="icon-wrapper">
            <div class="icon">
                <a class="modal" href="<?php echo RSMEMBEXP_URL; ?>&show=active" rel="{handler: 'iframe', size: {x: 800, y: 550}, onClose: function() {}}">
                    <img src="/joomla25/administrator/templates/bluestork/images/header/icon-48-stats.png" alt=""  />
                    <span>Download Active Members</span>
                </a>
            </div>
        </div>
        <div class="icon-wrapper">
            <div class="icon">
                <a class="modal" href="<?php echo RSMEMBEXP_URL; ?>&show=expired" rel="{handler: 'iframe', size: {x: 800, y: 550}, onClose: function() {}}">
                    <img src="/joomla25/administrator/templates/bluestork/images/header/icon-48-stats.png" alt=""  />
                    <span>Download Inactive Members</span>
                </a>
            </div>
        </div>
    </div>

