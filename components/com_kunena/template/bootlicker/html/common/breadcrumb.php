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

$item = array_shift($this->pathway);
 if ($item) : ?>
 
	<div class="row-fluid column-row">
       	  <div class="span12 column-item">
             <ul class="breadcrumb" style="border:1px solid #E3E3E3;">
				<li class="active"><span class="divider"><i class="icon-location hasTooltip"></i><a href="<?php echo $item->link ?>"><?php echo $item->name ?></a></span></li>
				<?php foreach($this->pathway as $item) : ?>
                <span class="divider">/</span>
				<li><a href="<?php echo $item->link ?>"><?php echo $item->name ?></a></li>
				<?php endforeach; ?>
              </ul>
		   </div>
           
	</div>
<?php endif ?>
