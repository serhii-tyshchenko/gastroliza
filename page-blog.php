<?php
/**
 * The template for displaying the services page
 *
 * @package gastroliza
 */
$theme_root_link = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="uk-UA">

<head>
    <title>Послуги — Gastroliza</title>

    <link rel="canonical" href="https://gastroliza.com.ua/">
    <link rel="shortlink" href="https://gastroliza.com.ua/">
    <?php get_template_part('template-parts/head'); ?>

</head>

<body class="page-template page-template-elementor_header_footer page page-id-3233 theme-medwell woocommerce-js elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-3233 e--ua-blink e--ua-edge e--ua-webkit" data-elementor-device-mode="desktop">

    <?php get_template_part('template-parts/navbar'); ?>

    <div id="content" class="site-content">
        <div class="page-title-area overlay-bg style-1" style=" background-image: url(<?php echo $theme_root_link ?>/images/sub-banner-img.jpg); ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12 text-center">
                        <h1 class="title">Послуги</h1>
                        <p>Kuis aute irure dolor in reprehenderit in voluptate velit essecillum dolore fugiat nulla pariatur </p>
                    </div>
                    <div class="col-sm-12 text-center">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-list"><a href="https://gastroliza.com.ua/" title="На головну">Головна </a></li>
                            <li class="breadcrumb-list"><a href="https://gastroliza.com.ua/services/">Послуги</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Послуги  -->
        <div id="primary" class="content-area medwell-page-containerr medwell-single-details">
            <main id="main" class="site-main">
                <div class="single-details-area">
                    <div class="container">
                        <?php
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>
            </main><!-- #main -->
        </div>
        <!-- Послуги  -->
    </div>
    <?php get_footer(); ?>
</body>

</html>