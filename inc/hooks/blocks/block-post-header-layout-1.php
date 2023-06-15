<?php

/**
 * List block part for displaying header content in page.php
 *
 * @package CoverNews
 */

?>
<div class="header-layout-1">
    <?php
    if ((has_nav_menu('aft-top-nav')) || (has_nav_menu('aft-social-nav'))) :
    ?>
        <div class="top-masthead">

            <div class="container">
                <div class="row">
                    <?php
                    $show_date = covernews_get_option('show_date_section');

                    if (has_nav_menu('aft-top-nav') || ($show_date == true)) : ?>
                        <div class="col-xs-12 col-sm-12 col-md-8 device-center">
                            <?php
                            if ($show_date == true) : ?>
                                <span class="topbar-date">
                                    <?php
                                    echo wp_kses_post(date_i18n(get_option('date_format')));
                                    ?>
                                </span>

                            <?php endif; ?>

                            <?php if (has_nav_menu('aft-top-nav')) {

                                wp_nav_menu(array(
                                    'theme_location' => 'aft-top-nav',
                                    'menu_id' => 'top-menu',
                                    'depth' => 1,
                                    'container' => 'div',
                                    'container_class' => 'top-navigation'
                                ));
                            }

                            ?>
                        </div>
                    <?php endif; ?>
                    <?php
                    $show_social_menu = covernews_get_option('show_social_menu_section');
                    if (has_nav_menu('aft-social-nav') && $show_social_menu == true) : ?>
                        <div class="col-xs-12 col-sm-12 col-md-4 pull-right">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'aft-social-nav',
                                'link_before' => '<span class="screen-reader-text">',
                                'link_after' => '</span>',
                                'menu_id' => 'social-menu',
                                'container' => 'div',
                                'container_class' => 'social-navigation'
                            ));
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div> <!--    Topbar Ends-->
    <?php

    endif;


    ?>
    <header id="masthead" class="site-header">
        <?php
        $class = '';
        $background = '';
        if (has_header_image()) {
            $class = 'data-bg';
            $background = get_header_image();
        }

        ?>
        <div class="top-header-1" >
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <div style="text-align: right;">
                                    <a href="https://govzalla.ru/main_info/" style=" font-weight:500; color:#496ba8" class="main-info-top"><svg style="color: rgb(73, 107, 168);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 12"> <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" fill="#496ba8"></path> </svg>   Сведения об образовательной деятельности</a>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div style="text-align: right;font-weight:500; "><a href="#" class="bvi-open eye-class" style="color:#496ba8;"> <svg style="color: rgb(73, 107, 168);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 11"> <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" fill="#496ba8"></path> <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" fill="#496ba8"></path> </svg> Версия для слабовидящих </a></div>
                            </div>
                        </div>
<!--                        <div class="bvi-shortcode"><a href="#" class="bvi-open" style=""><svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="bvi-svg-eye"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z" class="bvi-svg-eye"></path></svg> Версия для слабовидящих </a></div>-->

                    </div>
                </div>
            </div>
        </div>
        <div class="masthead-banner <?php echo esc_attr($class); ?>" data-background="<?php echo esc_attr($background); ?>">

            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="site-branding">
                            <?php
//                            the_custom_logo();
                            if (is_front_page() || is_home()) : ?>
                            <div class="site-branding__logo-box">
                                <div class="site-branding__img-box">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <img src="<?php echo esc_url(home_url('/wp-content/uploads/2023/05/logo-min-1-2048x1859.png'));?>" alt="">
                                    </a>
                                </div>
                                <h1 class="site-title font-family-1">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                        <span class="first_peace_title">Государственное бюджетное учреждение  дополнительного профессионального образования <br/></span>
                                        <span class ="second_peace_title">«Институт развития образования <br/> Чеченской Республики»</span> </a>
                                </h1>
                            </div>


                            <?php else : ?>
                                <div class="site-branding__logo-box">
                                    <div class="site-branding__img-box">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                        <img src="<?php echo esc_url(home_url('/wp-content/uploads/2023/05/logo-min-1-2048x1859.png'));?>" alt="">
                                        </a>
                                    </div>
                                    <h1 class="site-title font-family-1">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                            <span class="first_peace_title">Государственное бюджетное учреждение  дополнительного профессионального образования <br/></span>
                                            <span class ="second_peace_title">«Институт развития образования <br/> Чеченской Республики»</span> </a>
                                    </h1>
                                </div>

<!--                                <p class="site-title font-family-1">-->
<!--                                    <a href="--><?php //echo esc_url(home_url('/')); ?><!--" rel="home">--><?php //bloginfo('name'); ?><!--</a>-->
<!--                                </p>-->
                            <?php endif; ?>

                            <?php
                            $description = get_bloginfo('description', 'display');
                            if ($description || is_customize_preview()) : ?>
                                <p class="site-description"><?php echo esc_html($description); ?></p>
                            <?php
                            endif; ?>
                        </div>
                    </div>
                    <div class="col-md-8">

                        <div class="header-banner__second">
                            <div class="banner-second__img">
                                <a href="<?php echo home_url('/teacher_year')?>"><img src="<?php echo esc_url(home_url('/wp-content/uploads/2023/banners/logo_year2.png'));?>" alt="Год педагога и наставника"></a>
                            </div>
                        </div>

<!--                        --><?php
//                        $advertisement_scope = covernews_get_option('banner_advertisement_scope');
//                        if ($advertisement_scope == 'site-wide') {
//
//                            do_action('covernews_action_banner_advertisement');
//                        } else {
//
//                            if (is_front_page() || is_home()) {
//                                do_action('covernews_action_banner_advertisement');
//                            }
//                        }
//                        ?>
                    </div>
                </div>
            </div>
        </div>




        <nav id="site-navigation" class="main-navigation">
            <div class="container">
                <div class="row">
                    <div class="kol-12">
                        <div class="navigation-container">

                            <div class="main-navigation-container-items-wrapper">

                                <span class="toggle-menu" aria-controls="primary-menu" aria-expanded="false">
                                    <a href="javascript:void(0)" class="aft-void-menu">
                                        <span class="screen-reader-text"><?php esc_html_e('Primary Menu', 'covernews'); ?></span>
                                        <i class="ham"></i>
                                    </a>
                                </span>
                                <span class="af-mobile-site-title-wrap">
                                    <?php the_custom_logo(); ?>
                                    <p class="site-title font-family-1">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                    </p>
                                </span>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'aft-primary-nav',
                                    'menu_id' => 'primary-menu',
                                    'container' => 'div',
                                    'container_class' => 'menu main-menu'
                                ));
                                ?>
                            </div>
                            <div class="cart-search">

                                <div class="af-search-wrap">


                                    <div class="search-overlay">

                                        <a href="#" title="Search" class="search-icon">
                                             <i class="fa fa-search"></i>
                                        </a>
                                        <div class="af-search-form">
                                            <?php get_search_form(); ?>
                                        </div>

                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>

<?php do_action('covernews_action_front_page_main_section');
