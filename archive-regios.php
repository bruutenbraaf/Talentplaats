<?php
get_header(); ?>

<?php $achtergrond_afbeelding = get_field('regios_overzicht_afbeelding', 'option'); ?>
<section class="header-reg" <?php if ($achtergrond_afbeelding) { ?> style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['home']; ?>" alt="<?php echo $achtergrond_afbeelding['alt']; ?>);" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12  text-center">
                <?php the_field('regios_overzicht_title', 'option'); ?>
                <?php the_field('regios_overzicht_intro', 'option'); ?>
            </div>
        </div>
    </div>
</section>


<?php if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('');
} ?>

<?php $terms = get_terms('regio'); ?>
<ul>
    <?php foreach ($terms as $term) { ?>
        <li>
            <?php echo $term->name; ?>

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
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </li>

    <?php } ?>
</ul>



<?php get_footer(); ?>