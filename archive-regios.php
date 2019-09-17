<?php
get_header(); ?>

<?php $achtergrond_afbeelding = get_field('regios_overzicht_afbeelding', 'option'); ?>
<section class="header-reg" <?php if ($achtergrond_afbeelding) { ?> style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['home']; ?>" alt="<?php echo $achtergrond_afbeelding['alt']; ?>);" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center d-flex align-items-center col-reg">
                <div class="inner">
                    <?php the_field('regios_overzicht_title', 'option'); ?>
                    <?php the_field('regios_overzicht_intro', 'option'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="regi">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumbs">
                <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('');
                } ?>
            </div>
            <div class="col-md-12">
                <?php $terms = get_terms('regio'); ?>
                <?php foreach ($terms as $term) { ?>
                    <div class="regio">
                        <div class="regio--name">
                            <h2><?php _e('Regio', 'talentplaats'); ?> <span><?php echo $term->name; ?></span></h2>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 1L8 15M8 15L15 8M8 15L1 8" stroke="#2D2D46" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="inner">
                            <?php
                                $termid = $term->term_id;
                                $args = array(
                                    'post_type' => 'regios',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'regio',
                                            'field' => 'term_id',
                                            'terms' => $termid
                                        )
                                    )
                                );
                                $loop = new WP_Query($args); ?>
                            <?php if ($loop->have_posts()) : ?>
                                <div class="row">
                                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                        <div class="col-md-4">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</section>



<?php get_footer(); ?>