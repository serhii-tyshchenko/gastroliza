<!-- generate single post template -->
<?php
/**
 * The template for displaying single post
 *
 * @package gastroliza
 */
$theme_root_link = get_template_directory_uri();
$post_id = get_the_ID();
$post_title = get_the_title($post_id);
$post_category = get_the_category($post_id);
$post_category_name = $post_category[0]->name;
$post_category_link = get_category_link($post_category[0]->term_id);
$post_thumbnail = get_the_post_thumbnail_url($post_id);
$post_date = get_the_date('F j, Y');
$post_author = get_the_author();
?>

<!DOCTYPE html>
<html lang="uk-UA">

<head>
    <title>Сторінка</title>

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
                        <h1 class="title"><?php echo $post_title ?></h1>
                    </div>
                    <div class="col-sm-12 text-center">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-list"><a href="https://gastroliza.com.ua/" title="На головну">Головна </a></li>
                            <li class="breadcrumb-list"><a href="<?php echo($post_category_link); ?>"><?php echo $post_category_name ?></a></li>
                            <li class="active"><?php echo($post_title); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Про мене  -->
        <div id="primary" class="content-area medwell-page-containerr medwell-single-details">
            <main id="main" class="site-main">
                <div class="blog-details-area">
                    <div class="container">
                        <div class="blog-details-inner">
                            <div class="blog-details-content">
                                <div class="thumb border-thumb">
                                    <div class="blog-thumb-full d-flex">
                                        <img src="<?php echo($post_thumbnail); ?>" alt="">
                                    </div>
                                </div>

                                <div class="blog-item-info">
                                    <h3><?php echo($post_title); ?></h3>
                                    <ul class="post-meta">
                                        <li class="post-date">
                                            <span class="posted-on"><?php echo($post_date); ?></span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="st-blog-content-detils">
                                    <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main><!-- #main -->
        </div>
        <!-- Про мене  -->
    </div>
</body>

<?php get_footer(); ?>