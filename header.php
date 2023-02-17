<?php

/**
 * This is the template that displays all of the <head> section and everything up until main. It is called when using the wp_header().
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="
    <?php if (is_single()) {
        single_post_title('', true);
    } else {
        bloginfo('name');
        echo " - ";
        bloginfo('description');
    } ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <script src="https://cdn.websitepolicies.io/lib/cookieconsent/cookieconsent.min.js" defer></script>
    <?php if (get_locale() == 'de_CH') { ?>
        <script>
            window.addEventListener("load", function() {
                window.wpcc.init({
                    "corners": "small",
                    "colors": {
                        "popup": {
                            "background": "#FDCA00",
                            "text": "#000000",
                            "border": "#555555"
                        },
                        "button": {
                            "background": "#999999",
                            "text": "#ffffff"
                        }
                    },
                    "position": "bottom-right",
                    "content": {
                        "href": "https://matheliebe.194-56-189-125.plesk.page/datenschutzerklaerung/",
                        "message": "Diese Website verwendet Cookies, um Ihnen die bestmögliche Nutzung unserer Website zu ermöglichen.",
                        "link": "Mehr erfahren",
                        "button": "Verstanden"
                    }
                })
            });
        </script>
    <?php } else { ?>
        <script>
            window.addEventListener("load", function() {
                window.wpcc.init({
                    "corners": "small",
                    "colors": {
                        "popup": {
                            "background": "#FDCA00",
                            "text": "#000000",
                            "border": "#555555"
                        },
                        "button": {
                            "background": "#999999",
                            "text": "#ffffff"
                        }
                    },
                    "position": "bottom-right",
                    "content": {
                        "href": "https://matheliebe.194-56-189-125.plesk.page/en/privacy-policy/",
                        "button": "Got it"
                    }
                })
            });
        </script>
    <?php } ?>
    <header class="header">
        <div class="header-inner">
            <div class="header__left">
                <a href="<?php echo get_home_url(); ?>">
                    <span>Matheliebe.</span>
                </a>
                <?php wp_nav_menu(['theme_location' => 'language-menu']); ?>
            </div>
            <div class="header__right">
                <nav class="navbar">
                    <div class="navbar-container container">
                        <input type="checkbox" name="" id="nav-checkbox" onclick="openNav();">
                        <div class="hamburger-lines">
                            <span class="line line1"></span>
                            <span class="line line2"></span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="nav-menu nav-menu-closed">
        <div class="nav-menu-inner">
            <div class="nav-menu-inner-container">
                <div class="nav-lang-switcher">
                    <?php wp_nav_menu(['theme_location' => 'language-menu']); ?>
                </div>
                <div class="nav-menu-inner-links">
                    <div class="nav-menu-inner-links-topics">
                        <h3 class="first-title"><?php pll_e('Themenbereiche'); ?></h3>
                        <?php wp_nav_menu(['theme_location' => 'topics-menu']); ?>
                    </div>
                    <div class="nav-menu-inner-links-util">
                        <h3><?php pll_e('Ausstellung'); ?></h3>
                        <?php wp_nav_menu(['theme_location' => 'util-menu']); ?>
                    </div>
                    <div class="nav-menu-inner-links-media">
                        <h3><?php pll_e('Medien'); ?></h3>
                        <?php wp_nav_menu(['theme_location' => 'media-menu']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const nav = document.querySelector('.nav-menu');
        const checkbox = document.querySelector('#nav-checkbox');

        //Open Nav
        function openNav() {
            checkbox.setAttribute('onClick', 'javascript: closeNav();');
            nav.classList.remove('nav-menu-closed');
        }

        //Close Nav
        function closeNav() {
            checkbox.setAttribute('onClick', 'javascript: openNav();');
            nav.classList.add('nav-menu-closed');
        }

        //Close Nav on Link click
        function closeNavLink() {
            checkbox.setAttribute('onClick', 'javascript: openNav();');
            checkbox.checked = false;
            nav.classList.add('nav-menu-closed');
        }
    </script>