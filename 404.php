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
                    <h1>404, <b>Pagina niet gevonden</b></h1>
                    <p><?php _e('Sorry, we kunnen deze pagina niet meer vinden', 'talentplaats'); ?></p>
                    <a href="<?php echo get_home_url(); ?>" class="btn"><?php _e('Terug naar homepagina', 'flexsupport'); ?></a>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 d-flex align-items-center lvh nopadding">
                <div class="imghdr" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="int-archive">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center int-cont">
                <h2><?php _e('Probeer je pagina te <b>zoeken</b>', 'talentplaats'); ?></h2>
            </div>
            <div class="col-md-10 offset-md-1 text-center">
                <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                    <label>
                        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Vul hier uw zoekwoord in ...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
                    </label>
                    <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
                </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>