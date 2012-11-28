<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage Common
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

// Basic logic has been taken from Joomla! 2.5 (mod_menu)
// HTML output emulates default Joomla! 1.5 (mod_mainmenu), but only first level is supported

// Note. It is important to remove spaces between elements.
?>

<!-- user dropdown -->
								<ul class="nav pull-right">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-large icon-user"></i> <b class="caret"></b></a>
										<ul class="dropdown-menu dropdown-user-account">
              <form class="form-inline" action="<?php echo KunenaRoute::_('index.php?option=com_kunena') ?>" method="post" name="login" style="margin:0;">
					<input type="hidden" name="view" value="user" />
					<input type="hidden" name="task" value="login" />
					<div id="form-login-username" class="control-group">
			<div class="controls">
				<div class="input-prepend input-append">
					<span class="add-on"><i class="icon-user tip"></i><label for="modlgn-username" class="element-invisible"><?php echo JText::_('COM_KUNENA_LOGIN_USERNAME'); ?></label></span><input id="modlgn-username" type="text" name="username" class="input-small" tabindex="1" size="10" placeholder="<?php echo JText::_('COM_KUNENA_LOGIN_USERNAME') ?>" /><a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>" class="btn hasTooltip" title="<?php echo JText::_('COM_KUNENA_PROFILEBOX_FORGOT_USERNAME'); ?>"><i class="icon-question-sign"></i></a></span>
					<span class="add-on"><i class="icon-lock tip"></i><label for="modlgn-passwd" class="element-invisible"><?php echo JText::_('COM_KUNENA_LOGIN_PASSWORD'); ?></label></span><input id="modlgn-passwd" type="password" name="password" class="input-small" tabindex="2" size="10" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" /><a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>" class="btn hasTooltip" title="<?php echo JText::_('COM_KUNENA_PROFILEBOX_FORGOT_PASSWORD'); ?>"><i class="icon-question-sign"></i></a></span>
				 <input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes"/><label for="modlgn-remember" class="control-label">  <?php echo JText::_('COM_KUNENA_LOGIN_REMEMBER_ME') ?></label>
                 <button type="submit" tabindex="3" name="Submit" class="btn btn-primary"><?php echo JText::_('JLOGIN') ?></button>

        </div>
        </div>
		</div>
        <?php
			$usersConfig = JComponentHelper::getParams('com_users');
			if ($usersConfig->get('allowUserRegistration')) : ?>
			<ul class="unstyled">
				<li>
					<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
					<?php echo JText::_('COM_KUNENA_PROFILEBOX_CREATE_ACCOUNT'); ?> <i class="icon-arrow-right"></i></a>
				</li>

			</ul>
		<?php endif; ?>
				</form>
										</ul>
									</li>
								</ul>
								<!-- ./ user dropdown -->