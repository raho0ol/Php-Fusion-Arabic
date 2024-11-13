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
   <div id="main-wrapper">
					<div class="wrapper style1">
						<div class="inner">

							<!-- Feature 1 -->
								<section class="container box feature1">
									<div class="row">
										<div class="col-12">
											<header class="first major">
												<h2>This is an important heading</h2>
												<p>And this is where we talk about why we’re <strong>pretty awesome</strong> ...</p>
											</header>
										</div>
										<div class="col-4 col-12-medium">
											<section>
												<a href="#" class="image featured"><img src="<?php echo THEME ?>images/pic01.jpg" alt="" /></a>
												<header class="second icon solid fa-user">
													<h3>Here's a Heading</h3>
													<p>And a subtitle</p>
												</header>
											</section>
										</div>
										<div class="col-4 col-12-medium">
											<section>
												<a href="#" class="image featured"><img src="<?php echo THEME ?>images/pic02.jpg" alt="" /></a>
												<header class="second icon solid fa-cog">
													<h3>Also a Heading</h3>
													<p>And another subtitle</p>
												</header>
											</section>
										</div>
										<div class="col-4 col-12-medium">
											<section>
												<a href="#" class="image featured"><img src="<?php echo THEME ?>images/pic03.jpg" alt="" /></a>
												<header class="second icon solid fa-chart-bar">
													<h3>Another Heading</h3>
													<p>And yes, a subtitle</p>
												</header>
											</section>
										</div>
										<div class="col-12">
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper
											bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod
											quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit
											amet pulvinar. Nam nec turpis.</p>
										</div>
									</div>
								</section>

						</div>
					</div>
					<div class="wrapper style2">
						<div class="inner">

							<!-- Feature 2 -->
								<section class="container box feature2">
									<div class="row">
										<div class="col-6 col-12-medium">
											<section>
												<header class="major">
													<h2>And this is a subheading</h2>
													<p>It’s important but clearly not *that* important</p>
												</header>
												<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
												Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
												Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
												consequat etiam.</p>
												<footer>
													<a href="#" class="button medium icon solid fa-arrow-circle-right">Let's do this</a>
												</footer>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<header class="major">
													<h2>This is also a subheading</h2>
													<p>And is as unimportant as the other one</p>
												</header>
												<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
												Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
												Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
												consequat etiam.</p>
												<footer>
													<a href="#" class="button medium alt icon solid fa-info-circle">Wait, what?</a>
												</footer>
											</section>
										</div>
									</div>
								</section>

							</div>
					</div>
					<div class="wrapper style3">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="col-8 col-12-medium">

										<!-- Article list -->
											<section class="box article-list">
												<h2 class="icon fa-file-alt">Recent Posts</h2>

												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="<?php echo THEME ?>images/pic04.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">July 24</span>
																<h3><a href="#">Repairing a hyperspace window</a></h3>
															</header>
															<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
															semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
															feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
														</div>
													</article>

												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="<?php echo THEME ?>images/pic05.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">July 18</span>
																<h3><a href="#">Adventuring with a knee injury</a></h3>
															</header>
															<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
															semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
															feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
														</div>
													</article>

												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="<?php echo THEME ?>images/pic06.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">July 14</span>
																<h3><a href="#">Preparing for Y2K38</a></h3>
															</header>
															<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
															semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
															feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
														</div>
													</article>

											</section>
									</div>
									<div class="col-4 col-12-medium">

										<!-- Spotlight -->
											<section class="box spotlight">
												<h2 class="icon fa-file-alt">Spotlight</h2>
												<article>
													<a href="#" class="image featured"><img src="<?php echo THEME ?>images/pic07.jpg" alt=""></a>
													<header>
														<h3><a href="#">Neural Implants</a></h3>
														<p>The pros and cons. Mostly cons.</p>
													</header>
													<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod
													quisturpis nisi consequat ornare in, hendrerit in lectus semper mod quis eget mi quat etiam
													lorem. Phasellus quam turpis, feugiat sed et lorem ipsum dolor consequat dolor feugiat sed
													et tempus consequat etiam.</p>
													<p>Lorem ipsum dolor quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper
													mod quisturpis nisi consequat etiam lorem sed amet quam turpis.</p>
													<footer>
														<a href="#" class="button alt icon solid fa-file-alt">Continue Reading</a>
													</footer>
												</article>
											</section>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

<?php
}
