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
                    <?php the_field('nieuws_overzicht_title', 'option'); ?>
                    <?php the_field('nieuws_overzicht_intro', 'option'); ?>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 d-flex align-items-center lvh nopadding">
                <?php $achtergrond_afbeelding = get_field('nieuws_overzicht_afbeelding', 'option'); ?>
                <div class="imghdr" <?php if ($achtergrond_afbeelding) { ?> style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['home']; ?>" alt="<?php echo $achtergrond_afbeelding['alt']; ?>);" <?php } ?>>
                </div>
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
                                </div>
                                <div class="inf">
                                    <span class="date"><?php echo the_time('j F Y');?></span>
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