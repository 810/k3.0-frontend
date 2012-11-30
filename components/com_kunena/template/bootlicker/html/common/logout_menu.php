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
										
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-large icon-user"></i> <b class="caret"><img src="<?php echo $this->useravatar; ?>" /></b></a>
										<ul class="dropdown-menu dropdown-user-account" style="min-width:400px;">
											<span class="login-member">
									<span class="login-avatar"><?php echo $this->me->getAvatarImage('kavatar', 'welcome') ?></span>
									<span class="loginbox">
										<span class="login-welcome"><?php echo JText::sprintf('COM_KUNENA_VIEW_COMMON_LOGOUT_WELCOME', $this->me->getName(null, JText::_('COM_KUNENA_VIEW_COMMON_LOGOUT_OWN_LINK_TITLE'))) ?></span>
									</span>
								</span>
                                         </ul>
                                    </li>
								</ul>
								<!-- ./ user dropdown -->

