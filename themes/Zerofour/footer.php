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

if (file_exists(THEMES."templates/global/contact.php")) {
   require_once THEMES."templates/global/contact.php";
} else {
   require_once THEMES."templates/global/contact.tpl.php";
}
defined('IN_FUSION') || exit;

echo '<footer>';
    $theme_settings = get_theme_settings('Zerofour');
    echo nl2br(parse_textarea($settings['footer'], FALSE, TRUE));
    echo '<div id="footer-wrapper">


    <footer id="footer" class="container">
        <div class="row">
            <div class="col-3 col-6-medium col-12-small">

                <!-- Links -->
                    <section>
                        <h2>Filler Links</h2>
                        <ul class="divided">
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare in hendrerit </a></li>
                            <li><a href="#">Semper mod quisturpis nisi</a></li>
                            <li><a href="#">Consequat etiam phasellus</a></li>
                            <li><a href="#">Amet turpis, feugiat et</a></li>
                            <li><a href="#">Ornare hendrerit lectus</a></li>
                            <li><a href="#">Semper mod quis et dolore</a></li>
                            <li><a href="#">Amet ornare in hendrerit</a></li>
                            <li><a href="#">Consequat lorem phasellus</a></li>
                            <li><a href="#">Amet turpis, feugiat amet</a></li>
                            <li><a href="#">Semper mod quisturpis</a></li>
                        </ul>
                    </section>

            </div>
            <div class="col-3 col-6-medium col-12-small">

                <!-- Links -->
                    <section>
                        <h2>More Filler</h2>
                        <ul class="divided">
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare in in lectus</a></li>
                            <li><a href="#">Semper mod sed tempus nisi</a></li>
                            <li><a href="#">Consequat etiam phasellus</a></li>
                        </ul>
                    </section>

                <!-- Links -->
                    <section>
                        <h2>Even More Filler</h2>
                        <ul class="divided">
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare hendrerit lectus</a></li>
                            <li><a href="#">Semper quisturpis nisi</a></li>
                            <li><a href="#">Consequat lorem phasellus</a></li>
                        </ul>
                    </section>

            </div>
            <div class="col-6 col-12-medium imp-medium">

                <!-- About -->
                    <section>
                        <h2><strong>ZeroFour</strong> by HTML5 UP</h2>
                        <p>Hi! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
                        template by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>.
                        Its <a href="http://html5up.net/license/">Creative Commons Attribution</a>
                        licensed so use it for any personal or commercial project (just credit us
                        for the design!).</p>
                        <a href="#" class="button alt icon solid fa-arrow-circle-right">Learn More</a>
                    </section>

                <!-- Contact -->
                    <section>
                        <h2>Get in touch</h2>
                        <div>
                            <div class="row">
                                <div class="col-6 col-12-small">
                                    <dl class="contact">
                                        <dt>Twitter</dt>
                                        <dd><a href="#">@untitled-corp</a></dd>
                                        <dt>Facebook</dt>
                                        <dd><a href="#">facebook.com/untitled</a></dd>
                                        <dt>WWW</dt>
                                        <dd><a href="#">untitled.tld</a></dd>
                                        <dt>Email</dt>
                                        <dd><a href="#">user@untitled.tld</a></dd>
                                    </dl>
                                </div>
                                <div class="col-6 col-12-small">
                                    <dl class="contact">
                                        <dt>Address</dt>
                                        <dd>
                                            1234 Fictional Rd<br />
                                            Nashville, TN 00000-0000<br />
                                            USA
                                        </dd>
                                        <dt>Phone</dt>
                                        <dd>(000) 000-0000</dd>
                                    </dl>
                                </div>
                            </div>

                    </section>

            </div>
                     <!-- Copyright -->
        <div class="copyright">
            <ul class="menu">
            <li>'.showcopyright('', TRUE).showprivacypolicy().'</li>
            </ul>
            <div>'.showFooterErrors();
            if ($settings['rendertime_enabled'] == 1 || $settings['rendertime_enabled'] == 2) {
                  echo '<br /><small>'.showrendertime().showMemoryUsage().'</small>';
            }
            echo '<br />'.showcounter();'</div>
        </div>

</div>
  </div>';

            echo'<script src="'.THEME.'assets/js/jquery.min.js"></script>';
            // echo'<script src="'.THEME.'assets/js/jquery.dropotron.min.js"></script>';
            echo'<script src="'.THEME.'assets/js/browser.min.js"></script>';
            echo'<script src="'.THEME.'assets/js/breakpoints.min.js"></script>';
            echo'<script src="'.THEME.'assets/js/util.js"></script>';
            echo'<script src="'.THEME.'assets/js/main.js"></script>';
    echo '</footer>';






