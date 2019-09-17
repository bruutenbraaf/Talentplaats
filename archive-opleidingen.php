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
                    <?php the_field('opleidingen_overzicht_title', 'option'); ?>
                    <?php the_field('opleidingen_overzicht_intro', 'option'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php $achtergrond_afbeelding = get_field('opleidingen_overzicht_afbeelding', 'option'); ?>
    <div class="imghdr" <?php if ($achtergrond_afbeelding) { ?> style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['home']; ?>" alt="<?php echo $achtergrond_afbeelding['alt']; ?>);" <?php } ?>>
    </div>
</section>

<section class="int-archive">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center int-cont">
                <?php the_field('opleidingen_overzicht_titlecontent', 'option'); ?>
                <?php the_field('opleidingen_overzicht_introcontent', 'option'); ?>
            </div>
            <div class="col-md-12">
                <?php if (have_posts()) : ?>
                    <div class="arch-edu">
                        <?php while (have_posts()) : the_post(); ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="edu--item">
                                    <div class="edu--inner">
                                        <?php setup_postdata($post); ?>
                                        <h3><?php the_title(); ?></h3>
                                        <?php if (have_rows('informatie')) : ?>
                                            <?php while (have_rows('informatie')) : the_row(); ?>
                                                <div class="edu--inf">
                                                    <?php if (get_sub_field('locatie_opleiding')) { ?>
                                                        <div class="edu--loc">
                                                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.99992 1.33333C5.58543 1.33333 4.22888 1.89524 3.22868 2.89543C2.22849 3.89562 1.66659 5.25218 1.66659 6.66667C1.66659 8.73204 3.01041 10.7362 4.48389 12.2915C5.20699 13.0548 5.93236 13.6796 6.4777 14.1139C6.68066 14.2755 6.85793 14.4101 6.99992 14.5151C7.1419 14.4101 7.31918 14.2755 7.52213 14.1139C8.06747 13.6796 8.79284 13.0548 9.51595 12.2915C10.9894 10.7362 12.3333 8.73204 12.3333 6.66667C12.3333 5.25218 11.7713 3.89562 10.7712 2.89543C9.77096 1.89524 8.41441 1.33333 6.99992 1.33333ZM6.99992 15.3333C6.63012 15.888 6.62976 15.8878 6.62976 15.8878L6.62785 15.8865L6.62341 15.8835L6.60813 15.8732C6.59515 15.8644 6.57664 15.8517 6.55296 15.8353C6.50561 15.8025 6.43756 15.7547 6.35178 15.6928C6.18028 15.5689 5.93749 15.3881 5.64713 15.1569C5.06747 14.6954 4.29284 14.0286 3.51595 13.2085C1.98943 11.5972 0.333252 9.26796 0.333252 6.66667C0.333252 4.89856 1.03563 3.20286 2.28587 1.95262C3.53612 0.702379 5.23181 0 6.99992 0C8.76803 0 10.4637 0.702379 11.714 1.95262C12.9642 3.20286 13.6666 4.89856 13.6666 6.66667C13.6666 9.26796 12.0104 11.5972 10.4839 13.2085C9.70699 14.0286 8.93236 14.6954 8.3527 15.1569C8.06235 15.3881 7.81955 15.5689 7.64806 15.6928C7.56228 15.7547 7.49423 15.8025 7.44688 15.8353C7.4232 15.8517 7.40469 15.8644 7.39171 15.8732L7.37643 15.8835L7.37199 15.8865L7.37058 15.8875C7.37058 15.8875 7.36972 15.888 6.99992 15.3333ZM6.99992 15.3333L7.36972 15.888C7.14579 16.0373 6.85369 16.0371 6.62976 15.8878L6.99992 15.3333Z" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.99992 5.33333C6.26354 5.33333 5.66659 5.93029 5.66659 6.66667C5.66659 7.40305 6.26354 8 6.99992 8C7.7363 8 8.33325 7.40305 8.33325 6.66667C8.33325 5.93029 7.7363 5.33333 6.99992 5.33333ZM4.33325 6.66667C4.33325 5.19391 5.52716 4 6.99992 4C8.47268 4 9.66659 5.19391 9.66659 6.66667C9.66659 8.13943 8.47268 9.33333 6.99992 9.33333C5.52716 9.33333 4.33325 8.13943 4.33325 6.66667Z" />
                                                            </svg>
                                                            <span><?php the_sub_field('locatie_opleiding'); ?></span>
                                                        </div>
                                                    <?php } ?>
                                                    <?php if (get_sub_field('duur_opleiding')) { ?>
                                                        <div class="edu--dur">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00008 2.00008C4.68637 2.00008 2.00008 4.68637 2.00008 8.00008C2.00008 11.3138 4.68637 14.0001 8.00008 14.0001C11.3138 14.0001 14.0001 11.3138 14.0001 8.00008C14.0001 4.68637 11.3138 2.00008 8.00008 2.00008ZM0.666748 8.00008C0.666748 3.94999 3.94999 0.666748 8.00008 0.666748C12.0502 0.666748 15.3334 3.94999 15.3334 8.00008C15.3334 12.0502 12.0502 15.3334 8.00008 15.3334C3.94999 15.3334 0.666748 12.0502 0.666748 8.00008ZM8.00008 3.33341C8.36827 3.33341 8.66675 3.63189 8.66675 4.00008V7.58806L10.9649 8.73713C11.2942 8.90179 11.4277 9.30224 11.263 9.63156C11.0984 9.96088 10.6979 10.0944 10.3686 9.9297L7.70194 8.59637C7.47608 8.48344 7.33341 8.2526 7.33341 8.00008V4.00008C7.33341 3.63189 7.63189 3.33341 8.00008 3.33341Z" />
                                                            </svg>
                                                            <span><?php the_sub_field('duur_opleiding'); ?></span>
                                                        </div>
                                                    <?php } ?>
                                                    <?php if (get_sub_field('niveau_opleiding')) { ?>
                                                        <div class="edu--niv">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.33333 2.00008C4.06812 2.00008 3.81376 2.10544 3.62623 2.29297C3.43869 2.48051 3.33333 2.73486 3.33333 3.00008V10.8919C3.64295 10.745 3.98411 10.6667 4.33333 10.6667H12.6667V2.00008H4.33333ZM14 1.33341C14 0.965225 13.7015 0.666748 13.3333 0.666748H4.33333C3.71449 0.666748 3.121 0.912581 2.68342 1.35017C2.24583 1.78775 2 2.38124 2 3.00008V13.0001C2 13.6189 2.24583 14.2124 2.68342 14.65C3.121 15.0876 3.71449 15.3334 4.33333 15.3334H13.3333C13.7015 15.3334 14 15.0349 14 14.6667V1.33341ZM12.6667 12.0001H4.33333C4.06812 12.0001 3.81376 12.1054 3.62623 12.293C3.43869 12.4805 3.33333 12.7349 3.33333 13.0001C3.33333 13.2653 3.43869 13.5197 3.62623 13.7072C3.81376 13.8947 4.06812 14.0001 4.33333 14.0001H12.6667V12.0001Z" />
                                                            </svg>
                                                            <span><?php the_sub_field('niveau_opleiding'); ?></span>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <div class="edu--arr">
                                            <span><?php _e('Bekijk opleiding', 'talentplaats'); ?></span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

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

<?php if (get_field('opleidingen_overzicht_vacatures', 'option') == 1) { ?>
    <section class="vac-items-w">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_field('opleidingen_overzicht_vacturetitel', 'option'); ?>
                </div>
                <div class="col-md-12">
                    <div class="arch--vac-items">
                        <?php echo do_shortcode('[uitzendplaats_latest_vacancies]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


<?php if (get_field('opleidingen_overzicht_seo', 'option')) { ?>
    <section class="s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="int">
                        <?php the_field('opleidingen_overzicht_seo', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php get_footer(); ?>