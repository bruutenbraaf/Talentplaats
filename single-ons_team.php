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
                    <?php if (have_rows('header_inf')) : ?>
                        <?php while (have_rows('header_inf')) : the_row(); ?>
                            <?php the_sub_field('intro_header'); ?>
                            <?php if (have_rows('knoppen')) : ?>
                                <?php while (have_rows('knoppen')) : the_row(); ?>
                                    <?php $knop = get_sub_field('knop'); ?>
                                    <?php if ($knop) { ?>
                                        <a class="btn<?php if (get_sub_field('is_secondair') == 1) { ?> secondair<?php } ?>" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                    <?php } ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('informatie_team')) : ?>
                        <ul>
                            <?php while (have_rows('informatie_team')) : the_row(); ?>
                                <?php $telefoonnummer = get_sub_field('telefoonnummer'); ?>
                                <?php if ($telefoonnummer) { ?>
                                    <li><a href="<?php echo $telefoonnummer['url']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z" /></svg></a></li>
                                <?php } ?>
                                <?php $e_mail = get_sub_field('e-mail'); ?>
                                <?php if ($e_mail) { ?>
                                    <li><a href="<?php echo $e_mail['url']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z" /></svg></a></li>
                                <?php } ?>
                                <?php $linkedin = get_sub_field('linkedin'); ?>
                                <?php if ($linkedin) { ?>
                                    <li><a href="<?php echo $linkedin['url']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" /></svg></a></li>
                                <?php } ?>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 d-flex align-items-center lvh nopadding">
                <div class="imghdr" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <?php if (have_rows('sections')) : ?>
        <?php while (have_rows('sections')) : the_row(); ?>
            <?php if (get_row_layout() == 'tekst_zonder_foto') : ?>
                <section class="tx-fl <?php if (get_sub_field('maak_achtergrondkleur_wit') == 1) { ?> wht<?php } ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1 text-center">
                                <?php the_sub_field('tekst'); ?>
                                <?php if (have_rows('knoppen')) : ?>
                                    <?php while (have_rows('knoppen')) : the_row(); ?>
                                        <?php $knop = get_sub_field('knop'); ?>
                                        <?php if ($knop) { ?>
                                            <a class="btn<?php if (get_sub_field('is_secondair') == 1) { ?> secondair<?php } ?>" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                        <?php } ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'tekst_left') : ?>
                <section class="tx-fl <?php if (get_sub_field('maak_achtergrondkleur_wit') == 1) { ?> wht<?php } ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php the_sub_field('tekst'); ?>
                                <?php if (have_rows('knoppen')) : ?>
                                    <?php while (have_rows('knoppen')) : the_row(); ?>
                                        <?php $knop = get_sub_field('knop'); ?>
                                        <?php if ($knop) { ?>
                                            <a class="btn<?php if (get_sub_field('is_secondair') == 1) { ?> secondair<?php } ?>" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                        <?php } ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'twee_kol') : ?>
                <section class="tx-fl <?php if (get_sub_field('maak_achtergrondkleur_wit') == 1) { ?> wht<?php } ?>">
                    <div class="container">
                        <div class="row">
                            <div class='col-md-12'>
                                <h2><?php the_sub_field('titel'); ?></h2>
                            </div>
                            <div class="col-md-6">
                                <?php the_sub_field('links'); ?>
                            </div>
                            <div class='col-md-6'>
                                <?php the_sub_field('rechts'); ?>
                            </div>
                            <div class='col-md-12'>
                                <?php if (have_rows('knoppen')) : ?>
                                    <?php while (have_rows('knoppen')) : the_row(); ?>
                                        <?php $knop = get_sub_field('knop'); ?>
                                        <?php if ($knop) { ?>
                                            <a class="btn<?php if (get_sub_field('is_secondair') == 1) { ?> secondair<?php } ?>" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                        <?php } ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'qoute') : ?>
                <section class="qoute">
                    <div class="container">
                        <div class="row">
                            <div class='col-md-10 offset-md-1'>
                                <blockquote>
                                    <p><?php the_sub_field('qoute_tekst'); ?></p>
                                    <span class="name"><?php the_sub_field('qoute_naam'); ?></span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'foto_volledige_breedte') : ?>
                <?php $upload_afbeelding = get_sub_field('upload_afbeelding'); ?>
                <?php if ($upload_afbeelding) { ?>
                    <div class="fl--img" style="background-image:url(<?php echo $upload_afbeelding['sizes']['large']; ?>);">
                    </div>
                <?php } ?>
            <?php elseif (get_row_layout() == 'afbeeldingen_speels') : ?>
                <section class="afbs">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-4 offset-md-1">
                                <?php $afbeelding_links = get_sub_field('afbeelding_links'); ?>
                                <?php if ($afbeelding_links) { ?>
                                    <div class="limg" style="background-image:url(<?php echo $afbeelding_links['sizes']['large']; ?>);">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <?php $afbeelding_rechts = get_sub_field('afbeelding_rechts'); ?>
                                <?php if ($afbeelding_rechts) { ?>
                                    <div class="rimg" style="background-image:url(<?php echo $afbeelding_rechts['sizes']['large']; ?>);">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'ons_team') : ?>
                <section class="o-team">
                    <?php $loop = new WP_Query(array(
                                    'post_type' => 'ons_team',
                                    'order' => 'DESC'
                                )); ?>
                    <?php if ($loop->have_posts()) : ?>
                        <div class="our-team">
                            <div class="team-mem">
                                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                    <div class="team--member" style="background-image:urL(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                            <div class="arrows">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                            <span class="prev">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 8H15M15 8L8 1M15 8L8 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span class="next">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 8H15M15 8L8 1M15 8L8 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                jQuery(document).ready(function() {
                                    jQuery('.team-mem').slick({
                                        infinite: true,
                                        slidesToShow: 4,
                                        slidesToScroll: 1,
                                        arrows: true,
                                        prevArrow: jQuery('.prev'),
                                        nextArrow: jQuery('.next'),
                                        appendDots: jQuery(".dots"),
                                    });
                                });
                            </script>
                        <?php endif; ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1 text-center">
                                    <?php the_sub_field('tekst'); ?>
                                    <?php $bekijk_team_knop = get_sub_field('bekijk_team_knop'); ?>
                                    <?php if ($bekijk_team_knop) { ?>
                                        <a class="smlli" href="<?php echo $bekijk_team_knop['url']; ?>" target="<?php echo $bekijk_team_knop['target']; ?>"><?php echo $bekijk_team_knop['title']; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                </section>
            <?php elseif (get_row_layout() == 'vakgebieden') : ?>
                <section class="vkgb">
                    <div class="container">
                        <div class="row">
                            <div class="offset-md-2 col-md-8 text-center">
                                <?php the_sub_field('title'); ?>
                                <?php the_sub_field('content'); ?>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <?php $vakgebieden = get_sub_field('vakgebieden'); ?>
                                    <?php if ($vakgebieden) : ?>
                                        <?php foreach ($vakgebieden as $post) :  ?>
                                            <?php setup_postdata($post); ?>
                                            <div class="col-md-4">
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="vkgb--inner">
                                                        <span><?php the_title(); ?></span>
                                                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.528514 0.528514C0.788864 0.268165 1.21097 0.268165 1.47132 0.528514L5.47132 4.52851C5.73167 4.78886 5.73167 5.21097 5.47132 5.47132L1.47132 9.47132C1.21097 9.73167 0.788864 9.73167 0.528514 9.47132C0.268165 9.21097 0.268165 8.78886 0.528514 8.52851L4.05711 4.99992L0.528514 1.47132C0.268165 1.21097 0.268165 0.788864 0.528514 0.528514Z" fill="black" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'recente_vacatures') : ?>
                <section class="vac-items-w vac-sngl">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php the_sub_field('titel'); ?>
                            </div>
                            <div class="col-md-12">
                                <div class="arch--vac-items">
                                    <?php echo do_shortcode('[uitzendplaats_latest_vacancies]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php elseif (get_row_layout() == 'opleidingen') : ?>
                <section class="edu">
                    <div class="container">
                        <div class="row">
                            <div class="offset-md-2 col-md-8 text-center">
                                <?php the_sub_field('titel'); ?>
                                <?php the_sub_field('content'); ?>
                            </div>
                            <div class="col-md-12 int">
                                <?php $opleidingen_om_te_tonen = get_sub_field('opleidingen_om_te_tonen'); ?>
                                <?php if ($opleidingen_om_te_tonen) : ?>
                                    <div class="edu--items">
                                        <?php foreach ($opleidingen_om_te_tonen as $post) :  ?>
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
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 12H19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M12 5L19 12L12 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php endforeach; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12 d-flex justify-content-end">
                                <?php $alle_opleidingen_knop = get_sub_field('alle_opleidingen_knop'); ?>
                                <?php if ($alle_opleidingen_knop) { ?>
                                    <a class="all" href="<?php echo $alle_opleidingen_knop['url']; ?>" target="<?php echo $alle_opleidingen_knop['target']; ?>"><?php echo $alle_opleidingen_knop['title']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="edu--items-bg">
                        <svg width="823" height="279" class="edu--bg-t" viewBox="0 0 823 279" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 51.0955C41.614 119.712 100.073 176.696 169.957 216.544C245.647 259.702 331.79 281.076 418.863 278.303C505.936 275.531 590.546 248.72 663.34 200.834C730.551 156.621 785.27 96.0325 822.44 24.9074L769.485 0C736.941 61.3757 689.43 113.676 631.228 151.962C567.442 193.922 493.302 217.416 417.004 219.845C340.705 222.275 265.222 203.545 198.898 165.728C138.382 131.222 87.643 82.0507 51.2649 22.8696L0 51.0955Z" fill="#FF6600" />
                        </svg>
                        <svg width="823" height="279" class="edu--bg-b" viewBox="0 0 823 279" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 51.0955C41.614 119.712 100.073 176.696 169.957 216.544C245.647 259.702 331.79 281.076 418.863 278.303C505.936 275.531 590.546 248.72 663.34 200.834C730.551 156.621 785.27 96.0325 822.44 24.9074L769.485 0C736.941 61.3757 689.43 113.676 631.228 151.962C567.442 193.922 493.302 217.416 417.004 219.845C340.705 222.275 265.222 203.545 198.898 165.728C138.382 131.222 87.643 82.0507 51.2649 22.8696L0 51.0955Z" fill="#FF6600" />
                        </svg>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'reviews') : ?>
                <section class="rev">
                    <div class="container">
                        <div class="row">
                            <div class="offset-md-2 col-md-8 text-center">
                                <?php the_sub_field('titel'); ?>
                                <?php the_sub_field('content'); ?>
                            </div>
                            <div class="col-md-12">
                                <?php $reviews_om_te_tonen = get_sub_field('reviews_om_te_tonen'); ?>
                                <?php if ($reviews_om_te_tonen) : ?>
                                    <div class="rev--items">
                                        <?php foreach ($reviews_om_te_tonen as $post) :  ?>
                                            <?php setup_postdata($post); ?>
                                            <div class="rev--item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="rev--content">
                                                            <h5><?php the_title(); ?></h5>
                                                            <?php the_content(); ?>
                                                            <?php if (have_rows('informatie_review')) : ?>
                                                                <?php while (have_rows('informatie_review')) : the_row(); ?>
                                                                    <div class="rating">
                                                                        <?php $rating = get_sub_field('rating');
                                                                                                    for ($i = 0; $i < $rating; $i++) { ?>
                                                                            <span class="star">
                                                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M11 0L13.4697 7.60081H21.4616L14.996 12.2984L17.4656 19.8992L11 15.2016L4.53436 19.8992L7.00402 12.2984L0.538379 7.60081H8.53035L11 0Z" fill="#F2C94C" />
                                                                                </svg>
                                                                            </span>
                                                                        <?php } ?>
                                                                    </div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="rev--img" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12 d-flex p-4">
                                <div class="offset-4 col-4 d-flex justify-content-center">
                                    <div class="rev--dots">
                                    </div>
                                </div>
                                <?php $plaats_review_knop = get_sub_field('plaats_review_knop'); ?>
                                <?php if ($plaats_review_knop) { ?>
                                    <div class="col-4 d-flex justify-content-end">
                                        <a class="all" href="<?php echo $plaats_review_knop['url']; ?>" target="<?php echo $plaats_review_knop['target']; ?>"><?php echo $plaats_review_knop['title']; ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                            <script>
                                jQuery(document).ready(function() {
                                    jQuery('.rev--items').slick({
                                        infinite: true,
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        fade: true,
                                        dots: true,
                                        arrows: false,
                                        appendDots: jQuery(".rev--dots"),
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'over_ons') : ?>
                <section class="abh sngl-abh">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <?php $afbeelding = get_sub_field('afbeelding'); ?>
                                <?php if ($afbeelding) { ?>
                                    <div class="abh--img" style="background-image:url(<?php echo $afbeelding['sizes']['large']; ?>);">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-6">
                                <?php if (have_rows('content')) : ?>
                                    <?php while (have_rows('content')) : the_row(); ?>
                                        <div class="abh--content">
                                            <?php the_sub_field('tekst'); ?>
                                            <?php $knop = get_sub_field('knop'); ?>
                                            <?php if ($knop) { ?>
                                                <a class="all" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                            <?php } ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <svg preserveAspectRatio="none" viewBox="0 0 1051 644" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 565C119.667 629 384.6 688.2 591 413C797.4 137.8 979.667 39.6667 1045 25" stroke="#FF6600" stroke-width="50" />
                    </svg>
                </section>
            <?php elseif (get_row_layout() == 'inschrijven') : ?>
                <section class="insc">
                    <div class="container">
                        <div class="row">
                            <div class="offset-md-1 col-md-10 text-center">
                                <?php the_sub_field('content'); ?>
                                <?php $knop = get_sub_field('knop'); ?>
                                <?php if ($knop) { ?>
                                    <a class="btn" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'tellers__counters') : ?>
                <?php if (have_rows('counters')) : ?>
                    <section class="cntrs">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="cntrs--items d-flex">
                                        <?php while (have_rows('counters')) : the_row(); ?>
                                            <div class="cntrs--item text-center">
                                                <?php $icon = get_sub_field('icon'); ?>
                                                <?php if ($icon) { ?>
                                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                                                <?php } ?>
                                                <div class="countnumber"><?php the_sub_field('aantal'); ?></div>
                                                <h5><?php the_sub_field('titel'); ?></h5>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php elseif (get_row_layout() == 'scheiding') : ?>
                <div class="sch">
                </div>
            <?php elseif (get_row_layout() == 'scheiding_two') : ?>
                <div class="scht">
                    <svg viewBox="0 0 1068 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 30C63 70.6667 181.4 152 319 152C491 152 571 30 731 30C859 30 996.333 111.333 1049 152" stroke="#FF6600" stroke-width="60" />
                    </svg>
                </div>
            <?php elseif (get_row_layout() == 'laatste_nieuws') : ?>
                <section class="lnws">
                    <div class="container">
                        <div class="row">
                            <div class="offset-md-1 col-md-10 text-center">
                                <?php the_sub_field('titel'); ?>
                                <?php the_sub_field('content'); ?>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <div class="nws--items">
                                    <?php
                                                $aantal = get_sub_field('toon_aantal_laatste_berichten');
                                                $loop = new WP_Query(array(
                                                    'post_type' => 'nieuws',
                                                    'posts_per_page' => 3,
                                                    'order' => 'DESC'
                                                ));
                                                ?>
                                    <?php if ($loop->have_posts()) : ?>
                                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                            <div class="nws--item">
                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="nws--img" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php $term_list = wp_get_post_terms($post->ID, 'nieuws_categorie', array("fields" => "all")); ?>
                                                        <?php $count = 0; ?>
                                                        <?php foreach ($term_list as $term) { ?>
                                                            <span class="nws--ct"><?php echo $term->name ?><?php if ($count <= $totalcount) { ?>,<?php } ?></span>
                                                            <?php $count++; ?>
                                                        <?php } ?>
                                                        <?php $totalcount = $count; ?>
                                                        <h3><?php the_title(); ?></h3>
                                                        <p><?php echo excerpt(30); ?></p>
                                                        <a href="<?php the_permalink(); ?>" class="smll-btn"><?php _e('Bekijk artikel', 'talentplaats'); ?>
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6C0 5.58579 0.335786 5.25 0.75 5.25H11.25C11.6642 5.25 12 5.58579 12 6C12 6.41421 11.6642 6.75 11.25 6.75H0.75C0.335786 6.75 0 6.41421 0 6Z" fill="#2D2D46" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.46967 0.21967C5.76256 -0.0732233 6.23744 -0.0732233 6.53033 0.21967L11.7803 5.46967C12.0732 5.76256 12.0732 6.23744 11.7803 6.53033L6.53033 11.7803C6.23744 12.0732 5.76256 12.0732 5.46967 11.7803C5.17678 11.4874 5.17678 11.0126 5.46967 10.7197L10.1893 6L5.46967 1.28033C5.17678 0.987437 5.17678 0.512563 5.46967 0.21967Z" fill="#2D2D46" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="nws--dots">
                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    jQuery(document).ready(function() {
                        jQuery('.nws--items').slick({
                            infinite: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            fade: true,
                            dots: true,
                            appendDots: jQuery(".nws--dots"),
                        });
                    });
                </script>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>