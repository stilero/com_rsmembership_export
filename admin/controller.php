<?php
/**
 * Controller Controller
 *
 * @version  1.0
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2013-feb-24 Stilero Webdesign (www.stilero.com)
 * @category Components
 * @subpackage RSMembership_Export
 * @license	GPLv2
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class RsmembershipexportController extends JController{
    
    public static $viewName = 'dashboard';
    
    public function display(){
        $view =& $this->getView( self::$viewName, 'html' );
        $view->display();
    }
}
