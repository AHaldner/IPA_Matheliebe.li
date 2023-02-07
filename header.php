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
    <title><?php bloginfo('name'); ?></title>
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

<body <?php body_class(); ?> data-barba="wrapper">
    <header class="header">
        <div class="header-inner">
            <div class="header__left">
                <a href="<?php echo get_site_url(); ?>">
                    <span>Matheliebe.</span>
                </a>
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
                <div class="nav-menu-inner-links">
                    <a href="#section1">Dienstleistungen</a>
                    <a href="#section2">Angebote</a>
                    <a href="#section3">Vorgehen</a>
                    <a href="#section4">Referenzen</a>
                    <a href="#section5">Team</a>
                    <a href="#section6">FAQ</a>
                    <a href="#section7">Kontakt</a>
                </div>
                <div class="nav-menu-inner-home">
                    <a href="<?php echo get_site_url(); ?>">Startseite</a>
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
    <div id="barba-container" data-barba="container" data-barba-namespace="<?php echo get_current_template() ?>">