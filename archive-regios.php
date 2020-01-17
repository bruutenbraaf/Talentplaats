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
                    <?php the_field('regios_overzicht_title', 'option'); ?>
                    <?php the_field('regios_overzicht_intro', 'option'); ?>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 d-flex align-items-center lvh nopadding">
                <?php $achtergrond_afbeelding = get_field('regios_overzicht_afbeelding', 'option'); ?>
                <div class="imghdr" <?php if ($achtergrond_afbeelding) { ?> style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['home']; ?>" alt="<?php echo $achtergrond_afbeelding['alt']; ?>);" <?php } ?>>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vkgb">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center int-cont">
                <?php the_field('regios_overzicht_titlecontent', 'option'); ?>
                <?php the_field('regios_overzicht_introcontent', 'option'); ?>
            </div>
            <div class="offset-md-2 col-md-8 text-center">
                <?php the_sub_field('title'); ?>
                <?php the_sub_field('content'); ?>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <?php $terms = get_terms('regio'); ?>
                    <?php foreach ($terms as $term) { ?>
                        <?php $term_link = get_term_link($term); ?>
                        <div class="col-md-4">
                            <a href="<?php echo $term_link; ?>">
                                <div class="vkgb--inner">
                                    <span><?php echo $term->name; ?></span>
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.528514 0.528514C0.788864 0.268165 1.21097 0.268165 1.47132 0.528514L5.47132 4.52851C5.73167 4.78886 5.73167 5.21097 5.47132 5.47132L1.47132 9.47132C1.21097 9.73167 0.788864 9.73167 0.528514 9.47132C0.268165 9.21097 0.268165 8.78886 0.528514 8.52851L4.05711 4.99992L0.528514 1.47132C0.268165 1.21097 0.268165 0.788864 0.528514 0.528514Z" fill="black" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>