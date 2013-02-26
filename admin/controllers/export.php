<?php
/**
 * Export controller
 *
 * @version  1.0
 * @author Daniel Eliasson Stilero Webdesign http://www.stilero.com
 * @copyright  (C) 2012-okt-17 Stilero Webdesign, Stilero AB
 * @category Controllers
 * @license	GPLv2
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class RsmembershipexportControllerExport extends JController{
    
    public static $modelName = 'export';
    public static $viewName = 'export';
    
    public function display(){
        //Set Default View and Model
        $view =& $this->getView( self::$viewName, 'raw' );
        $model =& $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->display();
    }
}
