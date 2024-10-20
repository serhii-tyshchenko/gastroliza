<?php
/*
Template Name: Navbar
*/
$theme_root_link = get_template_directory_uri();
?>

<!-- navbar start -->
<div class="navbar-area navbar-area-2 style-2 extra-margin-top">
    <div class="navbar-area navbar-area-2 style-2 extra-margin-top">
        <nav class="navbar navbar-area navbar-expand-lg nav-transparent">
            <div class="container nav-container nav-white">
                <div class="responsive-mobile-menu">
                    <div class="logo">
                        <a class="standard-logo" href="/">
                            <img src="<?php echo $theme_root_link ?>/images/header-logo.png" alt="logo">
                        </a>
                        <a class="retina-logo" href="/">
                            <img src="<?php echo $theme_root_link ?>/images/logo@2x.png" alt="logo">
                        </a>
                    </div>
                    <button class="s7t-header-menu toggle-btn d-block d-lg-none" data-toggle="collapse" data-val="0" data-target="#medwell_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div id="medwell_main_menu" class="collapse navbar-collapse">
                    <ul id="menu-primary-menu" class="navbar-nav">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/about">Про мене</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/services">Послуги</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/">Блог</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/contact-us">Контакти</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- navbar end -->