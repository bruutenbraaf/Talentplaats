<?php
get_header(); ?>

<?php $achtergrond_afbeelding = get_field('branches_overzicht_afbeelding', 'option'); ?>
<section class="header-reg" <?php if ($achtergrond_afbeelding) { ?> style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['home']; ?>);" alt="<?php echo $achtergrond_afbeelding['alt']; ?>" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center d-flex align-items-center col-reg">
                <div class="inner">
                    <?php the_field('branches_overzicht_title', 'option'); ?>
                    <?php the_field('branches_overzicht_intro', 'option'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="brnch">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumbs dark">
                <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('');
                } ?>
            </div>
            <div class="col-md-12 branches">
                <h2><?php _e('branches', 'talentplaats'); ?></h2>
                <?php if (have_posts()) { ?>
                    <div class="overview">
                        <div class="row">
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-md-4">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</section>

<?php if (get_field('branches_overzicht_seo', 'option')) { ?>
    <section class="s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="int">
                        <?php the_field('branches_overzicht_seo', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>



<?php get_footer(); ?>