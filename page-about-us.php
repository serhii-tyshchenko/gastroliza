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
    <title>Про мене — Gastroliza</title>

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
                        <h1 class="title">Про мене</h1>
                        <p>Kuis aute irure dolor in reprehenderit in voluptate velit essecillum dolore fugiat nulla pariatur </p>
                    </div>
                    <div class="col-sm-12 text-center">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-list"><a href="https://gastroliza.com.ua/" title="На головну">Головна </a></li>
                            <li class="breadcrumb-list"><a href="https://gastroliza.com.ua/about-us/">Про мене</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Про мене  -->
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
        <div data-elementor-type="wp-page" data-elementor-id="18" class="elementor elementor-18">
            <div class="elementor-element elementor-element-6d311b8 e-flex e-con-boxed e-con e-parent" data-id="8434726" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-e70e760 e-con-full e-flex e-con e-child" data-id="e70e760" data-element_type="container">
                        <div class="elementor-element elementor-element-f1b8032 elementor-widget elementor-widget-heading" data-id="f1b8032" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-heading-title elementor-size-default">ВІДГУКИ</div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-acafd57 elementor-widget elementor-widget-heading" data-id="acafd57" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Що говорять мої пацієнти!</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-55300c9 elementor-absolute elementor-hidden-laptop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="55300c9" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="312" height="367" src="<?php echo $theme_root_link ?>/images/review-small-img.png" class="attachment-large size-large wp-image-6861" alt="">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a69b63f elementor-widget elementor-widget-testimonial" data-id="a69b63f" data-element_type="widget" data-widget_type="testimonial.default">
                            <div class="elementor-widget-container">
                                <section class="patients-reviews-sec w-100 float-left padding-top padding-bottom">
                                    <div class="container">
                                        <div class="owl-carousel testimonial-carousel owl-theme owl-loaded owl-drag" data-aos="fade-up" data-aos-duration="700">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(-2613px, 0px, 0px); transition: 0.25s; width: 7094px;">
                                                    <div class="owl-item">
                                                        <div class="item">
                                                            <div class="review-box">
                                                                <figure class="quote-img">
                                                                    <img loading="lazy" decoding="async" width="41" height="28" src="<?php echo $theme_root_link ?>/images/quote-img.png" class="attachment-full size-full" alt="">
                                                                </figure>
                                                                <p>Quisuam est rui dolorem ipsum rui dolor sit amet, consectetur, adipise velit sed quia non numquam eiusm tempora incidunt ut labore</p>
                                                                <div class="patient-details d-flex">
                                                                    <div class="patient-img">
                                                                        <figure class="mb-0">
                                                                            <img loading="lazy" decoding="async" width="54" height="54" src="<?php echo $theme_root_link ?>/images/testimonials-img.png" class="attachment-full size-full" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="patient-rating">
                                                                        <figure>
                                                                            <ul class="list-unstyled reviews-list">
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                            </ul>
                                                                        </figure>
                                                                        <h5>Kevin Andrew</h5>
                                                                        <span class="d-block">Happy Client</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div class="item">
                                                            <div class="review-box">
                                                                <figure class="quote-img">
                                                                    <img loading="lazy" decoding="async" width="41" height="28" src="<?php echo $theme_root_link ?>/images/quote-img.png" class="attachment-full size-full" alt="">
                                                                </figure>
                                                                <p>Nuisuam est rui dolorem ipsum rui dolor sit amet, consectetur, adipise velit sed quia non numquam eiusm tempora incidunt ut labore</p>
                                                                <div class="patient-details d-flex">
                                                                    <div class="patient-img">
                                                                        <figure class="mb-0">
                                                                            <img loading="lazy" decoding="async" width="54" height="54" src="<?php echo $theme_root_link ?>/images/testimonials-img1.png" class="attachment-full size-full" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="patient-rating">
                                                                        <figure>
                                                                            <ul class="list-unstyled reviews-list">
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                            </ul>
                                                                        </figure>
                                                                        <h5>Peri James</h5>
                                                                        <span class="d-block">Happy Client</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div class="item">
                                                            <div class="review-box">
                                                                <figure class="quote-img">
                                                                    <img loading="lazy" decoding="async" width="41" height="28" src="<?php echo $theme_root_link ?>/images/quote-img.png" class="attachment-full size-full" alt="">
                                                                </figure>
                                                                <p>Nuisuam est rui dolorem ipsum rui dolor sit amet, consectetur, adipise velit sed quia non numquam eiusm tempora incidunt ut labore</p>
                                                                <div class="patient-details d-flex">
                                                                    <div class="patient-img">
                                                                        <figure class="mb-0">
                                                                            <img decoding="async" src="<?php echo $theme_root_link ?>/images/testimonial-image.png" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="patient-rating">
                                                                        <figure>
                                                                            <ul class="list-unstyled reviews-list">
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                            </ul>
                                                                        </figure>
                                                                        <h5>Naurth Reough</h5>
                                                                        <span class="d-block">Happy Client</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div class="item">
                                                            <div class="review-box">
                                                                <figure class="quote-img">
                                                                    <img loading="lazy" decoding="async" width="41" height="28" src="<?php echo $theme_root_link ?>/images/quote-img.png" class="attachment-full size-full" alt="">
                                                                </figure>
                                                                <p>Quisuam est rui dolorem ipsum rui dolor sit amet, consectetur, adipise velit sed quia non numquam eiusm tempora incidunt ut labore</p>
                                                                <div class="patient-details d-flex">
                                                                    <div class="patient-img">
                                                                        <figure class="mb-0">
                                                                            <img loading="lazy" decoding="async" width="54" height="54" src="<?php echo $theme_root_link ?>/images/testimonials-img.png" class="attachment-full size-full" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="patient-rating">
                                                                        <figure>
                                                                            <ul class="list-unstyled reviews-list">
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                            </ul>
                                                                        </figure>
                                                                        <h5>Kevin Andrew</h5>
                                                                        <span class="d-block">Happy Client</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div class="item">
                                                            <div class="review-box">
                                                                <figure class="quote-img">
                                                                    <img loading="lazy" decoding="async" width="41" height="28" src="<?php echo $theme_root_link ?>/images/quote-img.png" class="attachment-full size-full" alt="">
                                                                </figure>
                                                                <p>Nuisuam est rui dolorem ipsum rui dolor sit amet, consectetur, adipise velit sed quia non numquam eiusm tempora incidunt ut labore</p>
                                                                <div class="patient-details d-flex">
                                                                    <div class="patient-img">
                                                                        <figure class="mb-0">
                                                                            <img loading="lazy" decoding="async" width="54" height="54" src="<?php echo $theme_root_link ?>/images/testimonials-img1.png" class="attachment-full size-full" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="patient-rating">
                                                                        <figure>
                                                                            <ul class="list-unstyled reviews-list">
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                            </ul>
                                                                        </figure>
                                                                        <h5>Peri James</h5>
                                                                        <span class="d-block">Happy Client</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item">
                                                        <div class="item">
                                                            <div class="review-box">
                                                                <figure class="quote-img">
                                                                    <img loading="lazy" decoding="async" width="41" height="28" src="<?php echo $theme_root_link ?>/images/quote-img.png" class="attachment-full size-full" alt="">
                                                                </figure>
                                                                <p>Nuisuam est rui dolorem ipsum rui dolor sit amet, consectetur, adipise velit sed quia non numquam eiusm tempora incidunt ut labore</p>
                                                                <div class="patient-details d-flex">
                                                                    <div class="patient-img">
                                                                        <figure class="mb-0">
                                                                            <img decoding="async" src="<?php echo $theme_root_link ?>/images/testimonial-image.png" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="patient-rating">
                                                                        <figure>
                                                                            <ul class="list-unstyled reviews-list">
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                            </ul>
                                                                        </figure>
                                                                        <h5>Naurth Reough</h5>
                                                                        <span class="d-block">Happy Client</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Про мене  -->
    </div>
    <?php get_footer(); ?>
</body>

</html>