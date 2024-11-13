<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: zDancing/footer.php
| Author: PHPFusion Development Team
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
defined('IN_FUSION') || exit;



echo '<section id="header">


<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">

								  <h1>
								<a href="'.BASEDIR.$settings['opening_page'].'">
									<img src="'.BASEDIR.$settings['sitebanner'].'" alt="'.$settings['sitename'].'"/>
								</a>
								</h1>
							</div>

						<!-- Nav -->
						<nav id="nav">
						<ul id="headerclass" >';
					echo showsublinks('', '', [
							'id'               => 'menu',
							'container'        => FALSE,
							'nav_class'        => 'nav navbar-nav navbar-right primary',
							'grouping'         => TRUE,
							'links_per_page'   => 3,
							'custom_header'    => '',
							'html_pre_content' => user_menu() // Function at bottom.
						]);

					echo '</ul>
					</nav>

					</header>
				</div>

</section>';