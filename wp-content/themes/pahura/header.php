<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags always come first -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php bloginfo( 'name'); ?> |
        <?php is_front_page() ? bloginfo( 'description' ) : wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body class="white">
    <?php
    global $exclude;
    $exclude = array();
    ?>
    <!-- Topbar -->
    <div id="topbar" class="container mx-auto text-xs p-2 font-medium">
        <div class="d-flex justify-content-between">
            <div>
                थारु राष्ट्रिय दैनिक
            </div>
            <div>
               भाषा, संस्कृति ओ समाचारमुलक पत्रिका
           </div>
           <div class="d-flex">
            <?php if (get_option('facebook_link') !=  null): ?>
                <div class="ml-4">
                    <a href="<?php echo get_option('facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a>
                </div>
            <?php endif ?>
            <?php if (get_option('youtube_link') != null): ?>
                <div class="ml-4">
                    <a href="<?php echo get_option('youtube_link'); ?>"><i class="fab fa-youtube"></i></a>
                </div>
            <?php endif ?>
            <?php if (get_option('twitter_link') != null): ?>
                <div class="ml-4">
                    <a href="<?php echo get_option('twitter_link'); ?>"><i class="fab fa-twitter"></i></a>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>

<div class="container py-3">
    <div class="d-block d-md-flex">
        <?php if (has_custom_logo()):
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'medium' );
            ?>
            <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo $image['0']; ?>" alt="" style="height: 100px;">
            </a>
        <?php endif ?>

        <!-- Header Ad -->
        <?php if ( is_active_sidebar( 'header-ad' ) ) : ?>
            <div class="ml-auto align-self-center mt-3 mt-md-0" style="max-height: 90px;">
                <?php dynamic_sidebar( 'header-ad' ); ?>
            </div>
        <?php endif; ?>
        <!-- End of Header Ad -->
    </div>
</div>

<div class="container date-container mb-2 p-2">
    <div class="d-flex justify-content-between">
        <div class="d-none d-md-block">[ <?php tharu_date_today(); ?> ]</div>
        <div>[ <?php echo get_nepali_today_date(); ?> ]</div>
        <div class="small english-date">[ <?php echo date('d M Y, l'); ?> ]</div>
    </div>
</div>

<!--Navbar-->
<nav class="navbar container navbar-expand-lg navbar-dark indigo z-depth-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu( array(
        'theme_location'  => 'primary',
        'depth'           => 2,
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarMenu',
        'menu_class'      => 'navbar-nav w-100 d-flex justify-content-between',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
</nav>
<!--/.Navbar-->

<div class="my-4"></div>

<!-- Below Header Ad -->
<?php if ( is_active_sidebar( 'below-header-ad' ) ) : ?>
    <div class="container text-center">
        <?php dynamic_sidebar( 'below-header-ad' ); ?>
    </div>
<?php endif; ?>
<!-- End of Below Header Ad -->

<div id="fb-root"></div>

<?php if ( get_option('facebook_app_id') != null ): ?>
    <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=<?php echo get_option('facebook_app_id'); ?>&autoLogAppEvents=1">
</script>
<?php else: ?>
    <!-- Please Add facebook App ID -->
<?php endif; ?>

