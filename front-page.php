<?php
get_header(); ?>
<main>
    <?php if (have_rows('sections')) : ?>
        <?php while (have_rows('sections')) : the_row(); ?>
            <?php if (get_row_layout() == 'header') : ?>
                <section class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center int">
                                <?php if (have_rows('content_links')) : ?>
                                    <div class="inner">
                                        <?php while (have_rows('content_links')) : the_row(); ?>
                                            <?php the_sub_field('content'); ?>
                                            <?php if (have_rows('knoppen')) : ?>
                                                <?php while (have_rows('knoppen')) : the_row(); ?>
                                                    <?php $knop = get_sub_field('knop'); ?>
                                                    <?php if ($knop) { ?>
                                                        <a class="btn<?php if (get_sub_field('is_secondair') == 1) { ?> secondair<?php } ?>" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                                    <?php } ?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-5 offset-md-1 d-flex align-items-center lvh nopadding">
                                <?php if (have_rows('content_rechts')) : ?>
                                    <?php while (have_rows('content_rechts')) : the_row(); ?>
                                        <div class="block">
                                            <h3><?php the_sub_field('titel'); ?></h3>
                                            <div class="lvhi">
                                                <div class="inner">
                                                    <?php echo do_shortcode('[uitzendplaats_latest_vacancies]'); ?>
                                                </div>
                                                <div class="arws">
                                                    <div class="prev">
                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7803 3.96967C11.4874 3.67678 11.0126 3.67678 10.7197 3.96967L6.21967 8.46967C5.92678 8.76256 5.92678 9.23744 6.21967 9.53033L10.7197 14.0303C11.0126 14.3232 11.4874 14.3232 11.7803 14.0303C12.0732 13.7374 12.0732 13.2626 11.7803 12.9697L7.81066 9L11.7803 5.03033C12.0732 4.73744 12.0732 4.26256 11.7803 3.96967Z" fill="white" />
                                                        </svg>
                                                    </div>
                                                    <div class="next">
                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7803 3.96967C11.4874 3.67678 11.0126 3.67678 10.7197 3.96967L6.21967 8.46967C5.92678 8.76256 5.92678 9.23744 6.21967 9.53033L10.7197 14.0303C11.0126 14.3232 11.4874 14.3232 11.7803 14.0303C12.0732 13.7374 12.0732 13.2626 11.7803 12.9697L7.81066 9L11.7803 5.03033C12.0732 4.73744 12.0732 4.26256 11.7803 3.96967Z" fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dots">
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            jQuery(document).ready(function() {
                                                jQuery('.lvhi .inner').slick({
                                                    infinite: true,
                                                    slidesToShow: 1,
                                                    slidesToScroll: 1,
                                                    fade: true,
                                                    dots: true,
                                                    prevArrow: jQuery('.prev'),
                                                    nextArrow: jQuery('.next'),
                                                    appendDots: jQuery(".dots"),
                                                });
                                            });
                                        </script>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if (have_rows('content_rechts')) : ?>
                            <?php while (have_rows('content_rechts')) : the_row(); ?>
                                <?php $achtergrond_afbeelding = get_sub_field('achtergrond_afbeelding'); ?>
                                <div class="imghdr" <?php if ($achtergrond_afbeelding) { ?> style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['home']; ?>" alt="<?php echo $achtergrond_afbeelding['alt']; ?>);" <?php } ?>>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </section>
                <section class="hpsf">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sfv">
                                    <?php echo do_shortcode('[uitzendplaats_vacancy_search]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'vakgebieden') : ?>

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>


<?php get_footer(); ?>