<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: home.php
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
if (file_exists(THEMES."templates/global/contact.php")) {
   require_once THEMES."templates/global/contact.php";
} else {
   require_once THEMES."templates/global/contact.tpl.php";
}
// Use the panels class
use PHPFusion\Panels;

// Make sure Core´s default home modules are disabled before override
define('DISABLE_HOME_MODULES', TRUE);


// Override Core´s default home modules
function display_home() {

    // Set your google map key, see this guide https://setcompass.com/How-to-Get-Google-Maps-API-Key-Guide.htm
    $googlemapkey = "";

    // Disable panels, see above for dependencies
    Panels::getInstance(TRUE)->hide_panel('RIGHT');
    Panels::getInstance(TRUE)->hide_panel('LEFT');
    Panels::getInstance(TRUE)->hide_panel('AU_CENTER');
    Panels::getInstance(TRUE)->hide_panel('U_CENTER');
    Panels::getInstance(TRUE)->hide_panel('L_CENTER');
    Panels::getInstance(TRUE)->hide_panel('BL_CENTER');

    // Custom additions to fix design fast with add_to_css function
    //add_to_css('#page-content > .row > .col-xs-12 {padding-left: 0;padding-right:0;}');

    // The concept home page starts here.
?>
   <!-- One -->
   <div id="content">
				<div class="inner">

					<!-- Post -->
						<article class="box post post-excerpt">
							<header>

								<!--
									Note: Titles and subtitles will wrap automatically when necessary, so don't worry
									if they get too long. You can also remove the <p> entirely if you don't
									need a subtitle.
								-->
								<h2><a href="#">Welcome to Striped</a></h2>
								<p>A free, fully responsive HTML5 site template by HTML5 UP</p>
							</header>
							<div class="info">
								<!--
									Note: The date should be formatted exactly as it's shown below. In particular, the
									"least significant" characters of the month should be encapsulated in a <span>
									element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
									Oh, and if you don't need a date for a particular page or post you can simply delete
									the entire "date" element.

								-->
								<span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>
								<!--
									Note: You can change the number of list items in "stats" to whatever you want.
								-->
								<ul class="stats">
									<li><a href="#" class="icon fa-comment">16</a></li>
									<li><a href="#" class="icon fa-heart">32</a></li>
									<li><a href="#" class="icon brands fa-twitter">64</a></li>
									<li><a href="#" class="icon brands fa-facebook-f">128</a></li>
								</ul>
							</div>
							<a href="#" class="image featured"><img src="<?php echo THEME ?>images/pic01.jpg" alt="" /></a>
							<p>
								<strong>Hello!</strong> You're looking at <strong>Striped</strong>, a fully responsive HTML5 site template designed by <a href="http://twitter.com/ajlkn">AJ</a>
								for <a href="http://html5up.net">HTML5 UP</a> It features a clean, minimalistic design, styling for all basic page elements (including blockquotes, tables and lists), a
								repositionable sidebar (left or right), and HTML5/CSS3 code designed for quick and easy customization (see code comments for details).
							</p>
							<p>
								Striped is released for free under the <a href="http://html5up.net/license">Creative Commons Attribution license</a> so feel free to use it for personal projects
								or even commercial ones &ndash; just be sure to credit <a href="http://html5up.net">HTML5 UP</a> for the design. If you like what you see here, be sure to check out
								<a href="http://html5up.net">HTML5 UP</a> for more cool designs or follow me on <a href="http://twitter.com/ajlkn">Twitter</a> for new releases and updates.
							</p>
						</article>

					<!-- Post -->
						<article class="box post post-excerpt">
							<header>
								<h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
								<p>Feugiat interdum sed commodo ipsum consequat dolor nullam metus</p>
							</header>
							<div class="info">
								<span class="date"><span class="month">Jul<span>y</span></span> <span class="day">8</span><span class="year">, 2014</span></span>
								<ul class="stats">
									<li><a href="#" class="icon fa-comment">16</a></li>
									<li><a href="#" class="icon fa-heart">32</a></li>
									<li><a href="#" class="icon brands fa-twitter">64</a></li>
									<li><a href="#" class="icon brands fa-facebook-f">128</a></li>
								</ul>
							</div>
							<a href="#" class="image featured"><img src="<?php echo THEME ?>images/pic02.jpg" alt="" /></a>
							<p>
								Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
								Nunc nulla velit, fermentum quis interdum quis, tate etiam commodo lorem ipsum dolor sit amet dolore.
								Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
								Nunc nulla velit, fermentum quis interdum quis, convallis eu sapien. Integer sed ipsum ante.
							</p>
						</article>

					<!-- Pagination -->
						<div class="pagination">
							<!--<a href="#" class="button previous">Previous Page</a>-->
							<div class="pages">
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<span>&hellip;</span>
								<a href="#">20</a>
							</div>
							<a href="#" class="button next">Next Page</a>
						</div>

				</div>
			</div>

		<!-- Sidebar -->
		<?php include THEME.'sidebar.php'; ?>
					</section>



<?php
}


