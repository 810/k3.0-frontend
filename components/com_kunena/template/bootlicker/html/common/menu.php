<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage Common
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<div class="navbar">
              <div class="navbar-inner">
                 <?php echo $this->getMenu() ?>
                 <?php  if ($this->me->exists()) {
	                   		include_once (KPATH_SITE.'/template/bootlicker/html/common/logout_menu.php'); 
						}
						else {
							include_once (KPATH_SITE.'/template/bootlicker/html/common/login_menu.php');
							 }
?>
              </div>
</div>
