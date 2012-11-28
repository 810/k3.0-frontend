<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<div id="Kunena" class="layout">
<?php
$this->displayMenu ();
$this->displayLoginBox ();
$this->displayBreadcrumb ();

// Display current view/layout
$this->displayLayout();

$this->displayBreadcrumb ();
$this->displayFooter ();
?>
</div>
