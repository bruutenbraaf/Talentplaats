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
                    <?php the_field('vakgebieden_overzicht_title', 'option'); ?>
                    <?php the_field('vakgebieden_overzicht_intro', 'option'); ?>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 d-flex align-items-center lvh nopadding">
                <?php $achtergrond_afbeelding = get_field('vakgebieden_overzicht_afbeelding', 'option'); ?>
                <div class="imghdr" <?php if ($achtergrond_afbeelding) { ?> style="background-image:url(<?php echo $achtergrond_afbeelding['sizes']['home']; ?>" alt="<?php echo $achtergrond_afbeelding['alt']; ?>);" <?php } ?>>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (have_posts()) { ?>
    <section class="vkgb">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center int-cont">
                    <?php the_field('vakgebieden_overzicht_titlecontent', 'option'); ?>
                    <?php the_field('vakgebieden_overzicht_introcontent', 'option'); ?>
                </div>
                <div class="offset-md-2 col-md-8 text-center">
                    <?php the_sub_field('title'); ?>
                    <?php the_sub_field('content'); ?>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <?php while (have_posts()) : the_post(); ?>
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
                        <?php endwhile; ?>
                    </div>
                </div>
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

<?php if (get_field('vakgebieden_overzicht_vacatures', 'option') == 1) { ?>
    <section class="vac-items-w">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_field('vakgebieden_overzicht_vacturetitel', 'option'); ?>
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
<?php if (get_field('vakgebieden_overzicht_seo', 'option')) { ?>
    <section class="s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="int">
                        <?php the_field('vakgebieden_overzicht_seo', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>