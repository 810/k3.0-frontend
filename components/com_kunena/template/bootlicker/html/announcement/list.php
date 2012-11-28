<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage Announcement
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

// FIXME: add pagination
?>
<div class="kblock">
	<div class="kheader">
		<h2>
			<span>
				<?php echo JText::_('COM_KUNENA_ANN_ANNOUNCEMENTS'); ?>
				<?php
				if (!empty($this->actions['add']))
					echo ' | ' . JHtml::_('kunenaforum.link', $this->actions['add'], JText::_('COM_KUNENA_ANN_ADD'), JText::_('COM_KUNENA_ANN_ADD'));
				?>
			</span>
		</h2>
	</div>
	<div class="kcontainer">
		<div class="kbody">
			<form action="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=announcement') ?>" method="post" id="adminForm" name="adminForm">
				<input type="hidden" name="boxchecked" value="0" />
				<?php echo JHtml::_( 'form.token' ); ?>

<table class="kannouncement">
	<tbody id="kannouncement_body">
		<tr class="ksth">
			<?php if ($this->actions): ?>
			<th class="kcol-annid"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count ( $this->announcements ); ?>);" /></th>
			<?php endif; ?>
			<th class="kcol-annid"><?php echo JText::_('COM_KUNENA_ANN_ID'); ?></th>
			<th class="kcol-anndate"><?php echo JText::_('COM_KUNENA_ANN_DATE'); ?></th>
			<th class="kcol-anntitle"><?php echo JText::_('COM_KUNENA_ANN_TITLE'); ?></th>
			<?php if ($this->actions): ?>
				<th class="kcol-annpublish"><?php echo JText::_('COM_KUNENA_ANN_PUBLISH'); ?></th>
				<th class="kcol-annedit"><?php echo JText::_('COM_KUNENA_ANN_EDIT'); ?></th>
				<th class="kcol-anndelete"><?php echo JText::_('COM_KUNENA_ANN_DELETE'); ?></th>
			<?php endif; ?>
		</tr>
		<?php $this->displayItems() ?>

		<?php  if ( !empty($this->announcementActions) ) : ?>
		<!-- Bulk Actions -->
		<tr class="krow1">
			<td colspan="<?php echo empty($this->announcementActions) ? 5 : 7 ?>" class="kcol krowmoderation">
				<?php echo JHtml::_('select.genericlist', $this->announcementActions, 'task', 'class="inputbox kchecktask" size="1"', 'value', 'text', 0, 'kchecktask'); ?>
				<input type="submit" name="kcheckgo" class="kbutton" value="<?php echo JText::_('COM_KUNENA_GO') ?>" />
			</td>
		</tr>
		<!-- /Bulk Actions -->
		<?php endif; ?>
	</tbody>
</table>

			</form>
		</div>
	</div>
</div>
