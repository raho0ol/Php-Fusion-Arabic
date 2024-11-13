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

echo '<footer>';
    $theme_settings = get_theme_settings('Verti');
    echo nl2br(parse_textarea($settings['footer'], FALSE, TRUE));
    echo '<div id="footer">


    <!-- Footer -->
    <div id="footer-wrapper">
        <footer id="footer" class="container">
            <div class="row">
                <div class="col-3 col-6-medium col-12-small">

                    <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li><a href="#">Etiam feugiat condimentum</a></li>
                                <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                <li><a href="#">Felis varius pellentesque potenti</a></li>
                                <li><a href="#">Nullam scelerisque blandit leo</a></li>
                            </ul>
                        </section>

                </div>
                <div class="col-3 col-6-medium col-12-small">

                    <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li><a href="#">Etiam feugiat condimentum</a></li>
                                <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                <li><a href="#">Felis varius pellentesque potenti</a></li>
                                <li><a href="#">Nullam scelerisque blandit leo</a></li>
                            </ul>
                        </section>

                </div>
                <div class="col-3 col-6-medium col-12-small">

                    <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li><a href="#">Etiam feugiat condimentum</a></li>
                                <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                <li><a href="#">Felis varius pellentesque potenti</a></li>
                                <li><a href="#">Nullam scelerisque blandit leo</a></li>
                            </ul>
                        </section>

                </div>
                <div class="col-3 col-6-medium col-12-small">

                    <!-- Contact -->
                        <section class="widget contact last">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
                            </ul>
                            <p>1234 Fictional Road<br />
                            Nashville, TN 00000<br />
                            (800) 555-0000</p>
                        </section>

                </div>
            </div>

        </footer>
    </div>

</div>


  <!-- Copyright -->
        <div class="copyright">
            <ul class="menu">
            <li>'.showcopyright('', TRUE).showprivacypolicy().'</li>
            </ul>
        </div>

</div>
  </div>';
            echo showFooterErrors();
            if ($settings['rendertime_enabled'] == 1 || $settings['rendertime_enabled'] == 2) {
                  echo '<br /><small>'.showrendertime().showMemoryUsage().'</small>';
            }
            echo '<br />'.showcounter();
            echo'<script src="'.THEME.'asset/js/jquery.min.js"></script>';
            // echo'<script src="'.THEME.'asset/js/jquery.dropotron.min.js"></script>';
            echo'<script src="'.THEME.'asset/js/browser.min.js"></script>';
            echo'<script src="'.THEME.'asset/js/breakpoints.min.js"></script>';
            echo'<script src="'.THEME.'asset/js/util.js"></script>';
            echo'<script src="'.THEME.'asset/js/main.js"></script>';
    echo '</footer>';






