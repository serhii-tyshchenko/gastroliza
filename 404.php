<?php
/**
 * The template for displaying the 404 page
 *
 * @package gastroliza
 */
$theme_root_link = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="uk-UA">

<head>
    <title>Сторінку не знайдено — Gastroliza</title>

    <link rel="canonical" href="https://gastroliza.com.ua/">
    <link rel="shortlink" href="https://gastroliza.com.ua/">
    <?php get_template_part('template-parts/head'); ?>

</head>

<body class="error404 theme-medwell woocommerce-js elementor-default elementor-kit-5 e--ua-blink e--ua-edge e--ua-webkit" data-elementor-device-mode="desktop">

    <?php get_template_part('template-parts/navbar'); ?>

    <div id="content" class="site-content">
        <div class="page-title-area overlay-bg style-1" style=" background-image: url(https://designingmedia.com/medwell/wp-content/themes/medwell/assets/img/sub-banner-img.jpg); ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12 text-center">
                        <h1 class="title">Сторінку не знайдено</h1>
                    </div>
                    <div class="col-sm-12 text-center">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-list"><a href="https://gastroliza.com.ua/" title="На головну">Головна </a></li>
                            <li class="active salim">Сторінку не знайдено </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="primary" class="content-area medwell-404-page medwell-page-containerr">
            <main id="main" class="site-main">
                <div class="blog-area-">
                    <div class="container">
                        <div class="row custom-gutter">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="blog-inner">
                                    <section class="error-404 not-found">
                                        <header class="page-header">
                                            <h1 class="error-heading">
                                                404 </h1>
                                            <h2 class="error-sub-title">Сторінку не знайдено</h2>
                                            <p>Ой! Сторінка, яку ви шукаєте, не існує. Можливо, вона була переміщена або видалена. </p>
                                        </header>

                                        <div class="page-content error-page-inner">
                                            <a href="https://gastroliza.com.ua/" class="go-back-btnn">
                                                Повернутись на головну </a>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

    <?php get_footer(); ?>
</body>

</html>