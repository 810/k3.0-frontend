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
											<li class="account-img-container">
												<img class="img-polaroid" src="<?php echo $this->useravatar; ?>" />
											</li>
											<li class="account-info">
												<h3>Geunevere Calista</h3>
												<h4>Rank: Administrator</h4>
                                                <h4>Inbox: 3</h4>
												<p><a href="#">Edit</a> | <a href="#">Privacy Settings</a></p>
											</li>
											<li class="account-footer">
														<a class="btn btn-primary btn-small" style="color:#FFF !important;" href="#">Change avatar</a> <a class="btn btn-primary btn-small" style="color:#FFF !important; " href="#">View profile</a>
														<a class="btn btn-danger btn-small" style="color:#FFF !important;"  href="#">Logout</a>																
											</li>
                                         </ul>
                                    </li>
								</ul>
								<!-- ./ user dropdown -->

