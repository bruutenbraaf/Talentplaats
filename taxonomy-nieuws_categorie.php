<?php
get_header(); ?>

<?php
$taxonomy_prefix = 'nieuws_categorie';
$term_id = get_queried_object()->term_id;
$term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
?>



<?php $afbeelding = get_field('afbeelding', $term_id_prefixed); ?>
<?php $afbeeldingarchive = get_field('nieuws_overzicht_afbeelding', 'option'); ?>
<section class="tax-header" style="background-image:url(<?php if ($afbeelding) { ?><?php echo $afbeelding['sizes']['large']; ?><?php } else { ?><?php echo $afbeeldingarchive['sizes']['large']; ?><?php } ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 inner d-flex align-items-center">
                <div class="cnt">
                    <span class="tax-name"><?php echo $term->name; ?></span>
                    <?php the_field('intro_taxonomy', $term_id_prefixed); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="taxs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 terms d-flex justify-content-center align-items-end">
                <?php $terms = get_terms('nieuws_categorie');
                $current = $term->name; ?>
                <ul>
                    <?php foreach ($terms as $term) { ?>
                        <?php $term_link = get_term_link($term);
                            if (is_wp_error($term_link)) {
                                continue;
                            } ?>
                        <li <?php if ($term->name == $current) { ?>class="current" <?php } ?>><a href="<?php echo esc_url($term_link) ?>"> <?php echo $term->name ?> </a></li>
                    <?php } ?>
                </ul>
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



<section class="pagination">
    <div class="d-flex justify-content-center align-items-center inner">
        <?php echo paginate_links(array(
            'prev_text' => '
        <span class="prev">
        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16 9.49354V6.01033C16 5.52776 15.6179 5.13953 15.143 5.13953H8.00089V1.37331C8.00089 0.596842 7.07957 0.208609 6.53677 0.756489L0.251757 7.13512C-0.0839214 7.47618 -0.0839214 8.02769 0.251757 8.36875L6.53677 14.7438C7.076 15.2916 8.00089 14.9034 8.00089 14.1269V10.3643H15.143C15.6179 10.3643 16 9.97611 16 9.49354Z" fill="#00A651"/>
        </svg>
        </span>',
            'next_text' => '<span class="next"> 
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 8H15M15 8L8 1M15 8L8 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>            
        </span>'

        )); ?>
    </div>
</section>





<?php get_footer(); ?>