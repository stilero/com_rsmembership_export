<?php
/**
 * Export view
 *
 * @version  1.0
 * @author Daniel Eliasson Stilero Webdesign http://www.stilero.com
 * @copyright  (C) 2013-feb-24 Stilero Webdesign, Stilero AB
 * @category Views
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class RsmembershipexportViewExport extends JView{
    
    function display($tpl = null) {
        $model =& $this->getModel('export');
        $show = JRequest::getVar('show', 'all');
        $members =& $model->getMembers($show);
        $this->assignRef('members', $members);
        parent::display($tpl);
    }
}
