<?php

// Template name: Contact

get_header(); ?>


<section class="sngl-header " style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
</section>
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 cntct-ofs d-flex align-items-center bread">
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
    <div class="container">
        <div class="row ctnc--inner">
            <div class="col-md-5 offset-md-1">
                <?php the_field('contactform'); ?>
            </div>
            <div class="offset-md-1 col-md-4">
                <?php if (have_rows('contactgegevens')) : ?>
                    <?php while (have_rows('contactgegevens')) : the_row(); ?>
                        <div class="cntc--inf">
                            <h3><?php the_sub_field('titel'); ?></h3>
                            <?php the_sub_field('gegevens'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php $impressie_foto_kantoor = get_field('impressie_foto_kantoor'); ?>
<?php if ($impressie_foto_kantoor) { ?>
    <div class="fllimg" style="background-image:url(<?php echo $impressie_foto_kantoor['sizes']['large']; ?>);">
    </div>
<?php } ?>

<?php the_content(); ?>

<?php get_footer(); ?>