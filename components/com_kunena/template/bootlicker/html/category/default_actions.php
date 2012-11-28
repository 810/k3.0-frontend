<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage Category
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<?php if (!empty ($this->categoryButtons)) : ?>
<td >
	<?php echo implode('<button class="btn" style="margin:2px;"> ', $this->categoryButtons), '</button>' ; ?>
</td>
<?php endif ?>
