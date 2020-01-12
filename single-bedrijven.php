<?php
get_header();
?>
<section class="relation-header">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-4 offset-md-1 comp-l">
                <img src="<?php echo get_the_post_thumbnail_url($post, 'large'); ?>)" class="company">
            </div>
            <div class="offset-md-1 col-md-6">
                <h1><?php the_title(); ?></h1>
                <div class="breadcrumbs">
                    <?php if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('');
                    } ?>
                </div>
            </div>
        </div>
</section>
<section class="sngl--content">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-1 share">
                <div class="inner">
                    <?php if (function_exists('ADDTOANY_SHARE_SAVE_KIT')) {
                        ADDTOANY_SHARE_SAVE_KIT(array(
                            'buttons' => array('facebook', 'twitter'),
                        ));
                    } ?>
                </div>
            </div>
            <div class="col-md-10 the-cnt">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<section class="intressting-n">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php _e('Wellicht ook interessant?', 'talentplaats'); ?></h2>
            </div>

            <?php
            $loop = new WP_Query(array(
                'post_type' => 'bedrijven',
                'posts_per_page' => 6,
                'order' => 'DESC'
            )); ?>
            <?php if ($loop->have_posts()) : ?>
                <?php $count = $loop->post_count; ?>
                <div class="<?php if ($count > 3) { ?>col-md-11<?php } else { ?>col-md-12<?php } ?>">
                    <div class="post--items">
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <?php $countitems++; ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="post--item d-flex align-items-end" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
                                </div>
                            </a>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <script>
                        jQuery(document).ready(function() {
                            jQuery('.post--items').slick({
                                slidesToShow: 3,
                                prevArrow: jQuery('.prev'),
                                nextArrow: jQuery('.next'),
                                responsive: [{
                                        breakpoint: 991,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 1
                                        }
                                    },
                                    {
                                        breakpoint: 768,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 1
                                        }
                                    }
                                ]
                            });
                        });
                    </script>
                </div>
                <?php if ($count > 3) { ?>
                    <div class="col-1 d-flex align-items-center">
                        <span class="next">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8H15M15 8L8 1M15 8L8 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                <?php } ?>
            <?php endif; ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>