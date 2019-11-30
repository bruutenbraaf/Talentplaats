<?php
get_header();
?>

<?php
$taxonomy_prefix = 'nieuws_categorie';
$term_id = get_queried_object()->term_id;
$term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
?>


<section class="sngl-header " style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
</section>
<div class="taxs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 terms d-flex align-items-center bread">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="breadcrumbs">
                            <?php if (function_exists('yoast_breadcrumb')) {
                                yoast_breadcrumb('');
                            } ?>
                        </div>
                    </div>
                </div>
                <svg width="5" height="5" class="left" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.5 3.5C5 2 5 0.65625 5 0.65625V5H0C0 5 2 5 3.5 3.5Z" fill="#F5F5FA" />
                </svg>
                <svg width="5" height="5" class="right" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 3.5C0 2 0 0.65625 0 0.65625V5H5C5 5 3 5 1.5 3.5Z" fill="#F5F5FA" />
                </svg>
            </div>
        </div>
    </div>
</div>

<section class="sngl--content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 text-center">
                <h1><?php the_title(); ?></h1>
                <span class="the--date"><?php echo the_time('j F, Y g:i A'); ?></span>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-1 share">
                <div class="inner">
                    <div id="SideShareBlock"></div>
                    <script>
                        jQuery(document).ready(function() {
                            jQuery('#SideShareBlock').cShare({
                                show_buttons: [
                                    'fb',
                                    'twitter',
                                    'linkedin',
                                    'email'
                                ]
                            });
                        });
                    </script>
                </div>
            </div>
            <div class="col-md-10 the-cnt">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1 p-share">
            <div id="shareBlock"></div>
            <script>
                jQuery(document).ready(function() {
                    jQuery('#shareBlock').cShare({
                        show_buttons: [
                            'fb',
                            'twitter',
                            'linkedin',
                            'email'
                        ]
                    });
                });
            </script>
        </div>
    </div>
</div>

<section class="intressting">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php _e('Wellicht ook interessant?', 'talentplaats'); ?></h2>
            </div>
            <?php
            $currentdate = date('m / d');
            $loop = new WP_Query(array(
                'post_type' => 'nieuws',
                'posts_per_page' => 6,
                'order' => 'DESC'
            )); ?>
            <?php if ($loop->have_posts()) : ?>
                <?php $count = $loop->post_count; ?>
                <div class="<?php if ($count > 3) { ?>col-md-11<?php } else { ?>col-md-12<?php } ?>">
                    <div class="post--items">
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <?php $count++; ?>
                            <div class="post--item d-flex align-items-end" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
                                <div class="inner">
                                    <?php $postdate = get_the_time('m / d'); ?>
                                    <?php if ($currentdate == $postdate) { ?>
                                        <span class="post--date"><?php _e('Vandaag', 'flexupdate'); ?></span>
                                    <?php } else { ?>
                                        <span class="post--date"><?php the_time('j F Y'); ?></span>
                                    <?php } ?>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="the_link"></a>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <script>
                        jQuery(document).ready(function() {
                            jQuery('.post--items').slick({
                                slidesToShow: 3,
                                prevArrow: jQuery('.prev'),
                                nextArrow: jQuery('.next'),
                            });
                        });
                    </script>
                    <?php if ($count > 3) { ?>
                        <span class="next">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8H15M15 8L8 1M15 8L8 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    <?php } ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>