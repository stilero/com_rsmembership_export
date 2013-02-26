<?php
/**
 * Dashboard View
 *
 * @version  1.0
 * @author Daniel Eliasson Stilero Webdesign http://www.stilero.com
 * @copyright  (C) 2013-feb-20 Stilero Webdesign, Stilero AB
 * @category Views
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
class RsmembershipexportViewDashboard extends JView
{
	// Overwriting JView display method
    function display($tpl = null){
        JToolBarHelper::title(JText::_('Member Export'), 'download.png');
        parent::display($tpl);
    }
}
