<?php
get_header(); ?>
<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center int">
                <div class="inner">
                    <div class="breadcrumbs">
                        <?php if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('');
                        } ?>
                    </div>
                    <?php
                    $s = get_search_query();
                    $args = array(
                        's' => $s
                    );
                    // The Query
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) { ?>
                        <?php _e("<h1>Zoekresultaten voor:<b> " . get_query_var('s') . "</b></h1>"); ?>
                    <?php } else { ?>
                        <?php _e("<h1>Sorry, niets gevonden met: <b> " . get_query_var('s') . "</b></h1>"); ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 d-flex align-items-center lvh nopadding">
                <?php $upload_afbeelding_sn = get_field('upload_afbeelding_sn', 'option'); ?>
                <?php if ($upload_afbeelding_sn) { ?>
                    <div class="imghdr" style="background-image:url(<?php echo $upload_afbeelding_sn['sizes']['large']; ?>);">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php if (have_posts()) { ?>
    <section class="posts">
        <div class="container">
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6 the--post">
                        <a href="<?php the_permalink(); ?>">
                            <div class="in-post">
                                <div class="postimg d-flex justify-content-end" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
                                    <?php $theterms = wp_get_post_terms($post->ID, 'nieuws_categorie', array("fields" => "names")); ?>
                                    <?php foreach ($theterms as $theterm) { ?>
                                        <span class="tax-name"><?php echo $theterm; ?></span>
                                    <?php } ?>
                                </div>
                                <div class="inf">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php echo excerpt(20); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php _e('Geen berichten gevonden', 'talentplaats'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php get_footer();
