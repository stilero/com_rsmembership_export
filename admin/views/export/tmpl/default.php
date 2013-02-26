<?php
/**
 * Export View Layout
 *
 * @version  1.0
 * @author Daniel Eliasson Stilero Webdesign http://www.stilero.com
 * @copyright  (C) 2013-feb-17 Stilero Webdesign, Stilero AB
 * @category Layouts
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
$keys = array_keys((array)$this->members[0]);
if(empty($this->members)){
    print '<p>'.JText::_('COM_RSMEMBERSHIPEXPORT_NO_MEMBERS_FOUND').'</p>';
    return;
}
header('Pragma: public');
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");                  // Date in the past   
header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');     // HTTP/1.1
header('Cache-Control: pre-check=0, post-check=0, max-age=0');    // HTTP/1.1
header("Pragma: no-cache");
header("Expires: 0");
header('Content-Transfer-Encoding: none');
header('Content-Type: application/vnd.ms-excel;');  
header("Content-type: application/x-msexcel");
header('Content-Disposition: attachment; filename="ExcelSpreadsheet.xls"');
?>
<table>
    <tr>
        <?php foreach ($keys as $key) : ?>
            <td><?php echo ucfirst($key); ?></td>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($this->members as $key => $value) : ?>
        <tr>
            <?php foreach ($value as $val) : ?>
                <td><?php echo utf8_decode ( $val); ?></td>
           <?php endforeach; ?>
        </tr>
   <?php endforeach; ?>
</table>