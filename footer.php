</main> <?php // closing the main header.php 
        ?>
<?php if (!is_page_template('templates/contact.php')) { ?>
    <?php if (have_rows('aanmelden_nieuwsbrief', 'option')) : ?>
        <?php while (have_rows('aanmelden_nieuwsbrief', 'option')) : the_row(); ?>
            <?php if (get_sub_field('aanmelden_nieuwsbrief_tonen') == 1) { ?>
                <?php if (have_rows('newsletter_content')) : ?>
                    <?php while (have_rows('newsletter_content')) : the_row(); ?>
                        <section class="sollicteer-e">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sollicteer-e__inner">
                                            <div class="row">
                                                <div class="col-md-10 offset-md-1 text-center nws--content">
                                                    <?php the_sub_field('titel'); ?>
                                                </div>
                                                <div class="col-md-8 offset-md-2 text-center nws--content">
                                                    <?php the_sub_field('content'); ?>
                                                </div>
                                                <div class="col-md-10 offset-md-1 text-center nws--content">
                                                    <form>
                                                        <input class="thismail" placeholder="Wat is uw e-mailadres?">
                                                        <div class="setmail">
                                                            <?php _e('Aanmelden', 'talentplaats'); ?>
                                                        </div>
                                                    </form>
                                                    <?php $aanmelden_pagina = get_field('aanmelden_pagina', 'option'); ?>
                                                    <script>
                                                        jQuery('.setmail').click(function() {
                                                            var currentPage = "<?php echo $aanmelden_pagina['url']; ?>";
                                                            var mail = jQuery(".thismail").val();
                                                            jQuery.cookie('e-mailadres', mail, {
                                                                expires: 7,
                                                                path: '/'
                                                            });
                                                            location.href = currentPage;
                                                        });
                                                        jQuery(".thismail").on('keyup', function(e) {
                                                            if (e.keyCode === 13) {
                                                                var currentPage = "<?php echo $aanmelden_pagina['url']; ?>";
                                                                var mail = jQuery(".thismail").val();
                                                                jQuery.cookie('e-mailadres', mail, {
                                                                    expires: 7,
                                                                    path: '/'
                                                                });
                                                                location.href = currentPage;
                                                            }
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <svg width="209" height="306" viewBox="0 0 209 306" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.04">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M89.5075 157.954C127.31 157.954 157.954 127.31 157.954 89.5075C157.954 51.7053 127.31 21.0606 89.5075 21.0606C51.7053 21.0606 21.0606 51.7053 21.0606 89.5075C21.0606 127.31 51.7053 157.954 89.5075 157.954ZM89.5075 179.015C138.941 179.015 179.015 138.941 179.015 89.5075C179.015 40.0739 138.941 0 89.5075 0C40.0739 0 0 40.0739 0 89.5075C0 138.941 40.0739 179.015 89.5075 179.015Z" fill="#2D2D46" />
                                                    <path d="M3.9563 235.215C19.7093 219.44 39.5117 208.335 61.1742 203.127C82.8368 197.92 105.516 198.812 126.703 205.706C147.891 212.599 166.762 225.226 181.231 242.19C195.699 259.153 205.201 279.793 208.686 301.827L184.824 305.612C182.036 287.985 174.434 271.473 162.859 257.902C151.285 244.331 136.188 234.23 119.237 228.715C102.287 223.2 84.1443 222.486 66.8142 226.652C49.4842 230.818 33.6423 239.702 21.0399 252.322L3.9563 235.215Z" fill="#2D2D46" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php } ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php } ?>
<footer <?php if (is_page_template('templates/contact.php')) { ?>class="nop" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php $footer_logo = get_field('footer_logo', 'option'); ?>
                <?php if ($footer_logo) { ?>
                    <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />
                <?php } ?>
            </div>
            <div class="col-md-3">
                <?php if (is_active_sidebar('footer_een')) {
                    dynamic_sidebar('footer_een');
                } ?>
            </div>
            <div class="col-md-3">
                <?php if (is_active_sidebar('footer_twee')) {
                    dynamic_sidebar('footer_twee');
                } ?>
            </div>
            <div class="col-md-3">
                <?php if (is_active_sidebar('footer_drie')) {
                    dynamic_sidebar('footer_drie');
                } ?>
            </div>
            <div class="col-md-12 justify-content-center d-flex ang-by">
                <?php if (have_rows('aangesloten_bij', 'option')) : ?>
                    <ul>
                        <?php while (have_rows('aangesloten_bij', 'option')) : the_row(); ?>
                            <li>
                                <?php $logo = get_sub_field('logo'); ?>
                                <?php $link = get_sub_field('link'); ?>
                                <?php if ($link) { ?>
                                    <a href="<?php echo $link['url']; ?>" <?php if ($link['target']) { ?>target="<?php echo $link['target']; ?>" <?php } ?>>
                                    <?php } ?>
                                    <?php if ($logo) { ?>
                                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                                    <?php } ?>
                                    <?php if ($link) { ?>
                                    </a>
                                <?php } ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="break">
    </div>
    <div class="socket">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <?php _e('© Talentplaats 2017 - 2019', 'talentplaats'); ?>
                </div>
                <div class="col-md-8 d-flex justify-content-center terms">
                    <?php wp_nav_menu(array('theme_location' => 'socket_menu')); ?>
                </div>
                <div class="col-md-2 socials justify-content-end d-flex">
                    <?php if (have_rows('socials', 'option')) : ?>
                        <ul>
                            <?php while (have_rows('socials', 'option')) : the_row(); ?>
                                <?php $twitter = get_sub_field('twitter'); ?>
                                <?php if ($twitter) { ?>
                                    <li>
                                        <a href="<?php echo $twitter['url']; ?>" <?php if ($twitter['target']) { ?> target="<?php echo $twitter['target']; ?>" <?php } ?>>
                                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.4582 2.99061C13.4677 3.12186 13.4677 3.25313 13.4677 3.38437C13.4677 7.38748 10.3744 12 4.72083 12C2.97906 12 1.36105 11.5031 0 10.6406C0.247472 10.6687 0.485393 10.6781 0.742386 10.6781C2.17955 10.6781 3.50254 10.2 4.55902 9.38439C3.20749 9.35625 2.07487 8.48438 1.68464 7.28437C1.87501 7.31248 2.06535 7.33124 2.26524 7.33124C2.54125 7.33124 2.81729 7.29372 3.07425 7.22813C1.66562 6.94686 0.609114 5.72812 0.609114 4.25624V4.21876C1.01836 4.44376 1.49429 4.58438 1.9987 4.60311C1.17065 4.05935 0.628157 3.13124 0.628157 2.08123C0.628157 1.51874 0.780413 1.00311 1.04693 0.553111C2.56026 2.39061 4.83503 3.59059 7.38577 3.72186C7.33819 3.49686 7.30963 3.26251 7.30963 3.02813C7.30963 1.35936 8.6802 0 10.3839 0C11.269 0 12.0685 0.365624 12.6301 0.95625C13.3249 0.825006 13.9911 0.571868 14.5812 0.225002C14.3528 0.928142 13.8674 1.51877 13.2297 1.89374C13.8484 1.82815 14.448 1.65936 15 1.42501C14.5813 2.02499 14.0578 2.55934 13.4582 2.99061Z" fill="#CFCEDF" />
                                            </svg>
                                        </a>
                                    </li>
                                <?php } ?>
                                <?php $facebook = get_sub_field('facebook'); ?>
                                <?php if ($facebook) { ?>
                                    <li>
                                        <a href="<?php echo $facebook['url']; ?>" <?php if ($facebook['target']) { ?>target="<?php echo $facebook['target']; ?>" <?php } ?>>
                                            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.61477 16V8.84375H0V6H2.61477V3.75938C2.61477 1.325 4.2375 0 6.60682 0C7.74205 0 8.71705 0.078125 9 0.1125V2.65625H7.35682C6.06818 2.65625 5.81932 3.21875 5.81932 4.04063V6H8.72727L8.32841 8.84375H5.81932V16" fill="#CFCEDF" />
                                            </svg>
                                        </a>
                                    </li>
                                <?php } ?>
                                <?php $youtube = get_sub_field('youtube'); ?>
                                <?php if ($youtube) { ?>
                                    <li>
                                        <a href="<?php echo $youtube['url']; ?>" <?php if ($youtube['target']) { ?> target="<?php echo $youtube['target']; ?>" <?php } ?>>
                                            <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6448 1.87759C16.4493 1.13853 15.8732 0.556469 15.1418 0.358938C13.8161 0 8.5 0 8.5 0C8.5 0 3.18398 0 1.85821 0.358938C1.1268 0.5565 0.550746 1.13853 0.355231 1.87759C0 3.21719 0 6.01213 0 6.01213C0 6.01213 0 8.80706 0.355231 10.1467C0.550746 10.8857 1.1268 11.4435 1.85821 11.6411C3.18398 12 8.5 12 8.5 12C8.5 12 13.816 12 15.1418 11.6411C15.8732 11.4435 16.4493 10.8857 16.6448 10.1467C17 8.80706 17 6.01213 17 6.01213C17 6.01213 17 3.21719 16.6448 1.87759V1.87759ZM6.76135 8.54972V3.47453L11.2045 6.01219L6.76135 8.54972V8.54972Z" fill="#CFCEDF" />
                                            </svg>
                                        </a>
                                    </li>
                                <?php } ?>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <?php $payoff = get_field('pay-off_socket', 'option'); ?>
                <?php if ($payoff) { ?>
                    <div class="col-md-12 text-center payoff">
                        <?php echo $payoff; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>