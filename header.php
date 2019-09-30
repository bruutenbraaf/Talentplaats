<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bruut en Braaf">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <title><?php wp_title('&raquo;', 'true', 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
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


                        <?php $frontpage_id = get_option('page_on_front'); ?>
                        <?php if (have_rows('sections', $frontpage_id)) : ?>
                            <?php while (have_rows('sections', $frontpage_id)) : the_row(); ?>
                                <?php if (get_row_layout() == 'header') : ?>
                                    <?php if (have_rows('content_links')) : ?>
                                        <?php while (have_rows('content_links')) : the_row(); ?>
                                            <?php if (have_rows('knoppen')) : ?>
                                                <div class="nav-ct d-flex">
                                                    <?php while (have_rows('knoppen')) : the_row(); ?>
                                                        <?php $knop = get_sub_field('knop'); ?>
                                                        <?php if ($knop) { ?>
                                                            <a class="btn<?php if (get_sub_field('is_secondair') == 1) { ?> secondair<?php } ?>" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                                        <?php } ?>
                                                    <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="mg_nav hamburger">
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


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
                                    <span class="nws--ct"><?php echo $term->name ?><?php if ($count <= $totalcount) { ?>,<?php } ?></span>
                                    <?php $count++; ?>
                                <?php } ?>
                                <?php $totalcount = $count; ?>
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
                <div class="l">
                </div>
                <div class="r">
                </div>
            </div>
        </div>
    </div>


    <main id="skrollr-body">