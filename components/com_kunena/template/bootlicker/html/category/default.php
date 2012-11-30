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

<?php $this->displayCategories () ?>
<?php if ($this->category->headerdesc) : ?>
<div class="well well-small">
	 <div class="row-fluid column-row">
       	  <div class="span12 column-item">
				<?php echo KunenaHtmlParser::parseBBCode ( $this->category->headerdesc ); ?>
		  </div>
	</div>
</div>
<?php endif; ?>

<?php if (!$this->category->isSection()) : ?>
<table>
	<tr>
		<td >
			<a id="forumtop"> </a>
			<a href="#forumbottom" rel="nofollow"><span class="divider"><i class="icon-arrow-down hasTooltip"></i></a>
		</td>
		<?php $this->displayCategoryActions() ?>
		<td class="klist-pages-all"><?php echo $this->getPagination (7); // odd number here (# - 2) ?></td>
	</tr>
</table>

<form action="<?php echo KunenaRoute::_('index.php?option=com_kunena') ?>" method="post" name="ktopicsform">
	<input type="hidden" name="view" value="topics" />
	<?php echo JHtml::_( 'form.token' ); ?>

<div class="well">
		<?php if (!empty($this->topicActions)) : ?>
		<span class="kcheckbox select-toggle"><input class="kcheckall" type="checkbox" name="toggle" value="" /></span>
		<?php endif; ?>
		<h2><span><?php echo $this->escape($this->headerText); ?></span></h2>
	<div class="row-fluid column-row">
       	  <div class="span12 column-item">
				<table class="span12">
					<?php if (empty ( $this->topics ) && empty ( $this->subcategories )) : ?>
					<tr><td class="kcol-first"><?php echo JText::_('COM_KUNENA_VIEW_NO_POSTS') ?></td></tr>

					<?php else : ?>
						<?php $this->displayRows (); ?>

					<?php  if ( !empty($this->topicActions) || !empty($this->embedded) ) : ?>
					<!-- Bulk Actions -->
					<tr>
						<td colspan="<?php echo empty($this->topicActions) ? 5 : 6 ?>" >
							<?php if (!empty($this->moreUri)) echo JHtml::_('kunenaforum.link', $this->moreUri, JText::_('COM_KUNENA_MORE'), null, null, 'follow'); ?>
							<?php if (!empty($this->topicActions)) : ?>
							<?php echo JHtml::_('select.genericlist', $this->topicActions, 'task', 'class="inputbox kchecktask" size="1"', 'value', 'text', 0, 'kchecktask'); ?>
							<?php if ($this->actionMove) :
								$options = array (JHtml::_ ( 'select.option', '0', JText::_('COM_KUNENA_BULK_CHOOSE_DESTINATION') ));
								echo JHtml::_('kunenaforum.categorylist', 'target', 0, $options, array(), 'class="inputbox fbs" size="1" disabled="disabled"', 'value', 'text', 0, 'kchecktarget');
								?>
                               <button class="btn" name="kcheckgo" type="submit"><?php echo JText::_('COM_KUNENA_GO') ?></button>
								<?php endif;?>
							<?php endif; ?>
						</td>
					</tr>
					<!-- /Bulk Actions -->
					<?php endif; ?>
					<?php endif; ?>
				</table>
		</div>
	</div>
</div>
</form>

<table>
	<tr>
		<td>
			<a id="forumbottom"> </a>
            <a href="#forumtop" rel="nofollow"><span class="divider"><i class="icon-arrow-up hasTooltip"></i></a>
		</td>
		<?php $this->displayCategoryActions() ?>
		<td class="klist-pages-all"><?php echo $this->getPagination (7); // odd number here (# - 2) ?></td>
	</tr>
</table>

<div class="row-fluid column-row">
       	  <div class="span12 column-item">
		<div class="kmoderatorslist-jump fltrt"><?php $this->displayForumJump (); ?></div>
		<?php if (!empty ( $this->moderators ) ) : ?>
			<?php
				$modslist = array();
				foreach ( $this->moderators as $moderator ) {
					$modslist[] = $moderator->getLink();
				}
				echo JText::_('COM_KUNENA_MODERATORS') . ': ' . implode(', ', $modslist);
			?>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>
</div>