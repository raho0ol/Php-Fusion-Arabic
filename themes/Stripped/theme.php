<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: theme.php
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

require_once INCLUDES.'theme_functions_include.php';

// Definitions
define('BOOTSTRAP', TRUE); // Enable Bootstrap, to turn it off set FALSE
// define('BOOTSTRAP4', TRUE); // Uncomment if using a BS4 Based template

define('FONTAWESOME', TRUE); // Enabled Font Awesome, Comment to disable
// define('ENTYPO', TRUE); // Uncomment to enable Entypo

// Setting to enable only 2 columns layout ( 2 Panels ) // We set this TRUE for most theme ports for now
define('THEME_2COL', TRUE); // Set TRUE to enable
define('THEME_SIDE', 'RIGHT'); // Enable LEFT or RIGHT side when 2COL is set to TRUE
define('THEME_BULLET', '&middot;'); // Compability for non bootstraped panels, used here and there.


// Default styles and smaller adjustments is to be done in styles.css that belongs to any given theme.
//add_to_head("<link rel='stylesheet' href='".THEME."assets/css/main.css?v=".filemtime(THEME.'assets/css/main.css')."'>");
// add_to_head("<link rel='stylesheet' href='".THEME."asset/css/menu.css?v=".filemtime(THEME.'asset/css/menu.css')."'>");

// Init the content rendering engine
function render_page()
{

    // Load Fusion Core Settings
    $settings = fusion_get_settings();

    // Adjust for SEO
    $file_path = str_replace(ltrim($settings['site_path'], '/'), '', preg_replace('/^\//', '', FUSION_REQUEST));
    if ($settings['site_seo'] && defined('IN_PERMALINK')) {
        $file_path = \PHPFusion\Rewrite\Router::getRouterInstance()->getCurrentURL();
    }

    $is_home = 'home.php' == $file_path;
    // include THEME.'header.php';
     echo '<body class="is-preload">';

    $homeClass = "other-page";
    if($is_home) { $homeClass = "is-home"; }
    echo '<div id="page-wrapper" class="'.$homeClass.'">';

	// include THEME.'header.php'; // Header Content starts here



	$is_home = 'home.php' == $file_path;
	if ($is_home) { //If home-page

    }
    if (!$is_home) {
        echo '<div class="container">';
    }
	$content = ['sm' => 12, 'md' => 12, 'lg' => 12];
    $left    = ['sm' => 3,  'md' => 2,  'lg' => 2];
    $right   = ['sm' => 3,  'md' => 3,  'lg' => 3];

    $left_side = TRUE;
    $right_side = TRUE;
    $padding_left = defined('LEFT') && LEFT ? 'p-l-0 ' : '';
    $padding_right = defined('RIGHT') && RIGHT ? 'p-r-0 ' : '';

    if (THEME_2COL == TRUE) {
        $left_side = THEME_SIDE == 'LEFT' ? TRUE : FALSE;
        $right_side = THEME_SIDE == 'RIGHT' ? TRUE : FALSE;
        $padding_left = $left_side == TRUE ? 'p-l-0 ' : '';
        $padding_right = $right_side == TRUE ? 'p-r-0 ' : '';
    }

    if ((defined('LEFT') && LEFT) && $left_side == TRUE) {
        $content['sm'] = $content['sm'] - $left['sm'];
        $content['md'] = $content['md'] - $left['md'];
        $content['lg'] = $content['lg'] - $left['lg'];
    }

    if ((defined('RIGHT') && RIGHT) && $right_side == TRUE) {
        $content['sm'] = $content['sm'] - $right['sm'];
        $content['md'] = $content['md'] - $right['md'];
        $content['lg'] = $content['lg'] - $right['lg'];
    }

    if ((defined('LEFT') && LEFT) && $left_side == TRUE) {
        echo '<div id="left-side" class="col-xs-12 col-sm-'.$left['sm'].' col-md-'.$left['md'].' col-lg-'.$left['lg'].'">';
            echo defined('RIGHT') && RIGHT && $right_side == FALSE ? RIGHT : '';
            echo defined('LEFT') && LEFT ? LEFT : '';
        echo '</div>';
    }


    if (!$is_home) {
        echo '<div id="cover">';
        }
        if (!$is_home) {
            echo '<div id="sidebarnew" class="col-xs-3">';
            include 'sidebar.php';
        echo '</div>';

        }
        if (!$is_home) {
            echo '<div id="main-content" class="'.$padding_left.$padding_right.'col-xxs-12  col-xs-12 col-sm-6 col-lg-6 '.'">';
            echo defined('U_CENTER') && U_CENTER ? U_CENTER : '';
            echo CONTENT;

            echo defined('L_CENTER') && L_CENTER ? L_CENTER : '';
        echo '</div>';

        }else if ($is_home) {
            echo defined('U_CENTER') && U_CENTER ? U_CENTER : '';
         echo CONTENT;
         echo defined('L_CENTER') && L_CENTER ? L_CENTER : '';
        }


        if ((defined('RIGHT') && RIGHT) && $right_side == TRUE) {
            echo '<div id="right-side" class="col-xs-12 col-sm-3 col-lg-3">';
                echo defined('RIGHT') && RIGHT ? RIGHT : '';
                echo defined('LEFT') && LEFT && $left_side == FALSE ? LEFT : '';
            echo '</div>';
        }
        echo '</div>';
        echo defined('BL_CENTER') && BL_CENTER ? BL_CENTER : '';

        echo '</section>'; //closing main container section

        if (!$is_home) {
            echo '</div>';
        }
        if (!$is_home) {
            echo '</div>';
        }

	// Footer Content starts here
    // include THEME.'footer.php';

    // echo '</div>';
    include THEME.'footer.php';

    echo '</div>'; //closing wrap-body
    echo '</body>';
}

// Customized Register / Login menu, use it as default on concept pages where panels is disabled, it is called in the header above
function user_menu() {
    $locale = fusion_get_locale();
    $settings = fusion_get_settings();
    $userdata = fusion_get_userdata();
    $languages = fusion_get_enabled_languages();

    if (iMEMBER) {
        $name = $userdata['user_name'];
    } else {
        $name = $locale['login'].($settings['enable_registration'] ? '/'.$locale['register'] : '');
    }

    ob_start();
    echo '<ul class="nav navbar-nav navbar-right secondary m-r-0">';
        if (count($languages) > 1) {
            echo '<li class="nav-item dropdown">';
                echo '<a href="#" class="dropdown-toggle pointer" data-toggle="dropdown" title="'.LANGUAGE.'">';
                    echo '<i class="fa fa-globe"></i> ';
                    echo '<img src="'.BASEDIR.'locale/'.LANGUAGE.'/'.LANGUAGE.'-s.png" alt="'.translate_lang_names(LANGUAGE).'"/>';
                    echo '<span class="caret"></span>';
                echo '</a>';

                echo '<ul class="dropdown-menu">';
                    foreach ($languages as $language_folder => $language_name) {
                        echo '<li class="dropdown-item"><a class="display-block" href="'.clean_request('lang='.$language_folder, ['lang'], FALSE).'">';
                            echo '<img class="m-r-5" src="'.BASEDIR.'locale/'.$language_folder.'/'.$language_folder.'-s.png" alt="'.$language_folder.'"/> ';
                            echo $language_name;
                        echo '</a></li>';
                    }
                echo '</ul>';
            echo '</li>';
        }

        echo '<li id="user-info" class="dropdown">';
            echo '<a href="#" id="user-menu" class="dropdown-toggle" data-toggle="dropdown">'.$name.' <span class="caret"></span></a>';

            if (iMEMBER) {
                echo '<ul class="dropdown-menu" aria-labelledby="user-menu" style="min-width: 180px;">';
                    echo '<li class="dropdown-item"><a href="'.BASEDIR.'profile.php?lookup='.$userdata['user_id'].'"><i class="m-r-5 fa fa-fw fa-user-circle-o"></i>'.$locale['view'].' '.$locale['profile'].'</a></li>';
                    echo '<li class="dropdown-item"><a href="'.BASEDIR.'messages.php"><i class="m-r-5 fa fa-fw fa-envelope-o"></i> '.$locale['message'].'</a></li>';
                    echo '<li class="dropdown-item"><a href="'.BASEDIR.'edit_profile.php"><i class="m-r-5 fa fa-fw fa-pencil"></i> '.$locale['UM080'].'</a></li>';
                    echo iADMIN ? '<li class="dropdown-item"><a href="'.ADMIN.'index.php'.fusion_get_aidlink().'&pagenum=0"><i class="m-r-5 fa fa-fw fa-dashboard"></i> '.$locale['global_123'].'</a></li>' : '';
                    echo '<li class="dropdown-item"><a href="'.BASEDIR.'index.php?logout=yes"><i class="m-r-5 fa fa-fw fa-sign-out"></i> '.$locale['logout'].'</a></li>';
                echo '</ul>';
            } else {
                echo '<ul class="dropdown-menu login-menu" aria-labelledby="user-menu">';
                    echo '<li class="p-5">';
                        $action_url = FUSION_SELF.(FUSION_QUERY ? '?'.FUSION_QUERY : '');
                        if (isset($_GET['redirect']) && strstr($_GET['redirect'], '/')) {
                            $action_url = cleanurl(urldecode($_GET['redirect']));
                        }

                        echo openform('loginform', 'post', $action_url, ['form_id' => 'login-form']);
                        switch ($settings['login_method']) {
                            case 2:
                                $placeholder = $locale['global_101c'];
                                break;
                            case 1:
                                $placeholder = $locale['global_101b'];
                                break;
                            default:
                                $placeholder = $locale['global_101a'];
                        }

                        echo form_text('user_name', '', '', ['placeholder' => $placeholder, 'required' => TRUE, 'input_id' => 'username']);
                        echo form_text('user_pass', '', '', ['placeholder' => $locale['global_102'], 'type' => 'password', 'required' => TRUE, 'input_id' => 'userpassword']);
                        echo form_checkbox('remember_me', $locale['global_103'], '', ['value' => 'y', 'class' => 'm-0', 'reverse_label' => TRUE, 'input_id' => 'rememberme']);
                        echo form_button('login', $locale['global_104'], '', ['class' => 'btn-primary btn-sm m-b-5', 'input_id' => 'loginbtn']);
                        echo closeform();
                    echo '</li>';
                    echo '<li>'.str_replace(['[LINK]', '[/LINK]'], ['<a href="'.BASEDIR.'lostpassword.php">', '</a>'], $locale['global_106']).'</li>';
                    if ($settings['enable_registration']) echo '<li><a href="'.BASEDIR.'register.php">'.$locale['register'].'</a></li>';
                echo '</ul>';
            }
        echo '</li>';
    echo '</ul>';

    $html = ob_get_contents();
    ob_end_clean();

    echo '<ul class="navbar-search  m-r-0">';
    $action_url = BASEDIR.'search.php?stype=all';
    $placeholder = 'Type here...';
    echo openform('searchform', 'post', $action_url, ['form_id' => 'search-form']);
        echo form_text('stext', '', '', [
            'placeholder' => $placeholder,
            'required' => TRUE,
            'input_id' => 'searchbtn',

        ]);
        echo form_button('search', $locale['search'], '', [
            'class' => 'btn-primary btn-sm m-b-5',
            'input_id' => 'searchbtn',

    ]);
    echo closeform();

    echo '</ul>';
    return $html;
}

// Predefined Theme wrap functions in all of the sites sections
function opentable($title = FALSE, $class = '') {
    echo '<div class="panel panel-default opentable">';
    echo $title ? '<div class="panel-heading"><h4>'.$title.'</h4></div>' : '';
    echo '<div class="panel-body '.$class.'">';
}

function closetable() {
    echo '</div>';
    echo '</div>';
}

function openside($title = FALSE, $class = '') {
    echo '<div class="panel panel-default openside '.$class.'">';
    echo $title ? '<div class="panel-heading">'.$title.'</div>' : '';
    echo '<div class="panel-body">';
}

function closeside() {
    echo '</div>';
    echo '</div>';
}

require_once THEME . 'templates/home.php';

?>
