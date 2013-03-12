<?php
/**
 * Export Model
 *
 * @version  1.0
 * @author Daniel Eliasson Stilero Webdesign http://www.stilero.com
 * @copyright  (C) 2013-feb-24 Stilero Webdesign, Stilero AB
 * @category Models
 * @license	GPLv2
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
class RsmembershipexportModelExport extends JModelItem
{
    protected $query;
    
	public function getMembers($show='all'){
            if($show == 'all'){
                return $this->getAllMembers();
            }else if($show == 'active'){
                return $this->getActiveMembers();
            }else if($show == 'expired'){
               return $this->getInactiveMembers(); 
            }
	}
        
        private function getAllMembers(){
            $db =& JFactory::getDbo();
            $query = $db->getQuery(true);
            $query->select('users.username, users.name, users.email, info.*, DATE(FROM_UNIXTIME(rsusers.membership_start)) AS start, DATE(FROM_UNIXTIME(rsusers.membership_end)) AS expires, IF(rsusers.status = 0, \'Active\', \'Inactive\') as status, trans.gateway AS Payment');
            $query->from($db->nameQuote('#__users').' users');
            $query->innerJoin($db->nameQuote('#__rsmembership_users').' info ON info.user_id = users.id');
            $query->innerJoin($db->nameQuote('#__rsmembership_membership_users').' rsusers ON rsusers.user_id = users.id');
            $query->innerJoin($db->nameQuote('#__rsmembership_transactions').' trans ON trans.user_id = users.id');
            //$query->where('s.id = '.(int)$systemId);
            $query->order('users.name');
            $db->setQuery($query);
            $members = $db->loadObjectList();
            return $members;
        }
        
        private function getActiveMembers(){
            $db =& JFactory::getDbo();
            $query = $db->getQuery(true);
            $query->select('users.username, users.name, users.email, info.*, DATE(FROM_UNIXTIME(rsusers.membership_start)) AS start, DATE(FROM_UNIXTIME(rsusers.membership_end)) AS expires, IF(rsusers.status = 0, \'Active\', \'Expired\') as status, trans.gateway AS Payment');
            $query->from($db->nameQuote('#__users').' users');
            $query->innerJoin($db->nameQuote('#__rsmembership_users').' info ON info.user_id = users.id');
            $query->innerJoin($db->nameQuote('#__rsmembership_membership_users').' rsusers ON rsusers.user_id = users.id');
            $query->innerJoin($db->nameQuote('#__rsmembership_transactions').' trans ON trans.user_id = users.id');
            $query->where('rsusers.status = 0');
            $query->order('users.name');
            $db->setQuery($query);
            $members = $db->loadObjectList();
            return $members;
        }
        
        private function getInactiveMembers(){
            $db =& JFactory::getDbo();
            $query = $db->getQuery(true);
            $query->select('users.username, users.name, users.email, info.*, DATE(FROM_UNIXTIME(rsusers.membership_start)) AS start, DATE(FROM_UNIXTIME(rsusers.membership_end)) AS expires, IF(rsusers.status = 2, \'Expired\', \'Inactive\') as status, trans.gateway AS Payment');
            $query->from($db->nameQuote('#__users').' users');
            $query->innerJoin($db->nameQuote('#__rsmembership_users').' info ON info.user_id = users.id');
            $query->innerJoin($db->nameQuote('#__rsmembership_membership_users').' rsusers ON rsusers.user_id = users.id');
            $query->innerJoin($db->nameQuote('#__rsmembership_transactions').' trans ON trans.user_id = users.id');
            $query->where('rsusers.status != 0');
            $query->order('users.name');
            $db->setQuery($query);
            $members = $db->loadObjectList();
            return $members;
        }

}