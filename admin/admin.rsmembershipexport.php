<?php
/**
 * admin.rsmembershipexport
 *
 * @version  1.0
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2013-feb-24 Stilero Webdesign (www.stilero.com)
 * @category Components
 * @license	GPLv2
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

JHTML::addIncludePath(JPATH_COMPONENT.DS.'helpers');
require_once JPATH_COMPONENT.DS.'controller.php';
$viewController = JRequest::getWord('view');

if ( $viewController) { 
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$viewController.'.php';
    if ( file_exists($path)) {
        require_once $path;
    } else {       
        $viewController = '';	   
    }
}
$classname    = 'RsmembershipexportController'.$viewController;
$controller   = new $classname();

// Perform the Request task
$controller->execute(JRequest::getCmd('task', 'display'));
 
// Redirect if set by the controller
$controller->redirect();