<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bruut en Braaf">
    <meta name="theme-color" content="#1772dd">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php wp_title('&raquo;', 'true', 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151246863-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-151246863-1');
    </script>
</head>

<body <?php body_class(); ?>>
    <nav>
        <div class="container">
            <div class="row align-items-center d-flex">
                <div class="branding">
                    <?php $logo = get_field('logo', 'option'); ?>
                    <a href="<?php echo get_home_url(); ?>">
                        <?php if ($logo) { ?>
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                        <?php } ?>
                    </a>
                </div>
                <div class="d-flex main--nav">
                    <div class="main_nav">
                        <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
                        <?php if (have_rows('call_to_action_menu', 'option')) : ?>
                            <div class="nav-ct d-flex">
                                <div class="inner">
                                    <?php while (have_rows('call_to_action_menu', 'option')) : the_row(); ?>
                                        <?php $knop = get_sub_field('knop'); ?>
                                        <?php if ($knop) { ?>
                                            <a class="btn<?php if (get_sub_field('is_secondair') == 1) { ?> secondair<?php } ?>" href="<?php echo $knop['url']; ?>" <?php if ($knop['target']) { ?>target="<?php echo $knop['target']; ?>" <?php } ?>><?php echo $knop['title']; ?></a>
                                        <?php } ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mobnav">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?php if (get_field('toon_reviews', 'option') == 1) { ?>
        <div class="fc">
            <script type="text/javascript" id="__fbcw__35f783e3-96ce-476d-8803-f47574a533b9">
                "use strict";
                ! function() {
                    window.FeedbackCompanyWidgets = window.FeedbackCompanyWidgets || {
                        queue: [],
                        loaders: []
                    };
                    var options = {
                        uuid: "35f783e3-96ce-476d-8803-f47574a533b9",
                        version: "1.2.1",
                        prefix: ""
                    };
                    if (
                        void 0 === window.FeedbackCompanyWidget) {
                        if (
                            window.FeedbackCompanyWidgets.queue.push(options), !document.getElementById(
                                "__fbcw_FeedbackCompanyWidget")) {
                            var scriptTag = document.createElement("script");
                            scriptTag.onload = function() {
                                    if (window.FeedbackCompanyWidget)
                                        for (; 0 < window.FeedbackCompanyWidgets.queue.length;) options = window.FeedbackCompanyWidgets.queue.pop(),
                                            window.FeedbackCompanyWidgets.loaders.push(
                                                new window.FeedbackCompanyWidgetLoader(options))
                                },
                                scriptTag.id = "__fbcw_FeedbackCompanyWidget",
                                scriptTag.src = "https://www.feedbackcompany.com/includes/widgets/feedback-company-widget.min.js", document.body.appendChild(scriptTag)
                        }
                    } else window.FeedbackCompanyWidgets.loaders.push(
                        new window.FeedbackCompanyWidgetLoader(options))
                }();
            </script>
            <div class="hide-fc">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7071 6.70711C19.0976 6.31658 19.0976 5.68342 18.7071 5.29289C18.3166 4.90237 17.6834 4.90237 17.2929 5.29289L12 10.5858L6.70711 5.29289C6.31658 4.90237 5.68342 4.90237 5.29289 5.29289C4.90237 5.68342 4.90237 6.31658 5.29289 6.70711L10.5858 12L5.29289 17.2929C4.90237 17.6834 4.90237 18.3166 5.29289 18.7071C5.68342 19.0976 6.31658 19.0976 6.70711 18.7071L12 13.4142L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L13.4142 12L18.7071 6.70711Z" fill="white" />
                </svg>
            </div>
        </div>
    <?php } ?>


    <div class="mgm">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <h2><?php _e('Laatste nieuws', 'talentplaats'); ?></h2>
                    <?php
                    $aantal = get_sub_field('toon_aantal_laatste_berichten');
                    $loop = new WP_Query(array(
                        'post_type' => 'nieuws',
                        'posts_per_page' => 3,
                        'order' => 'DESC'
                    ));
                    ?>
                    <?php if ($loop->have_posts()) : ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="news-nav">
                                <?php $term_list = wp_get_post_terms($post->ID, 'nieuws_categorie', array("fields" => "all")); ?>
                                <?php $count = 0; ?>
                                <?php foreach ($term_list as $term) { ?>
                                    <span class="nws--ct"><?php echo $term->name ?></span>
                                    <?php $count++; ?>
                                <?php } ?>

                                <h3><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>" class="smll-btn"><?php _e('Bekijk artikel', 'talentplaats'); ?>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6C0 5.58579 0.335786 5.25 0.75 5.25H11.25C11.6642 5.25 12 5.58579 12 6C12 6.41421 11.6642 6.75 11.25 6.75H0.75C0.335786 6.75 0 6.41421 0 6Z" fill="#2D2D46" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.46967 0.21967C5.76256 -0.0732233 6.23744 -0.0732233 6.53033 0.21967L11.7803 5.46967C12.0732 5.76256 12.0732 6.23744 11.7803 6.53033L6.53033 11.7803C6.23744 12.0732 5.76256 12.0732 5.46967 11.7803C5.17678 11.4874 5.17678 11.0126 5.46967 10.7197L10.1893 6L5.46967 1.28033C5.17678 0.987437 5.17678 0.512563 5.46967 0.21967Z" fill="#2D2D46" />
                                    </svg>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <div class="mgm--nav">
                        <?php wp_nav_menu(array('theme_location' => 'mega_menu')); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="l">
        </div>
        <div class="r">
        </div>
    </div>

    <div class="mobile-nav">
        <div class="inner">
            <?php wp_nav_menu(array('theme_location' => 'mobile_menu')); ?>
            <?php $frontpage_id = get_option('page_on_front'); ?>
            <?php if (have_rows('sections', $frontpage_id)) : ?>
                <?php while (have_rows('sections', $frontpage_id)) : the_row(); ?>
                    <?php if (get_row_layout() == 'header') : ?>
                        <?php if (have_rows('content_links')) : ?>
                            <?php while (have_rows('content_links')) : the_row(); ?>
                                <?php if (have_rows('knoppen')) : ?>
                                    <div class="mob-btn d-flex">
                                        <div>
                                            <?php while (have_rows('knoppen')) : the_row(); ?>
                                                <?php $knop = get_sub_field('knop'); ?>
                                                <?php if ($knop) { ?>
                                                    <a class="btn<?php if (get_sub_field('is_secondair') == 1) { ?> secondair<?php } ?>" href="<?php echo $knop['url']; ?>" <?php if ($knop['target']) { ?>target="<?php echo $knop['target']; ?>" <?php } ?>><?php echo $knop['title']; ?></a>
                                                <?php } ?>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="reading-progress"></div>
    <main>