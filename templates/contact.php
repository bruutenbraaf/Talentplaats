<?php

// Template name: Contact

get_header(); ?>
<?php

$location = get_field('google_maps');

if (!empty($location)) :
    ?>
    <div class="acf-map sngl-header">
        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>
<?php endif; ?>
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
            <div class="col-md-10 offset-md-1">
                <?php the_field('titel_contactpagina'); ?>
            </div>
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
                <?php if (have_rows('socials', 'option')) : ?>
                    <div class="c--socials">
                        <?php while (have_rows('socials', 'option')) : the_row(); ?>
                            <?php $twitter = get_sub_field('twitter'); ?>
                            <?php if ($twitter) { ?>
                                <a href="<?php echo $twitter['url']; ?>" target="<?php echo $twitter['target']; ?>"><svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4582 2.99061C13.4677 3.12186 13.4677 3.25313 13.4677 3.38437C13.4677 7.38748 10.3744 12 4.72083 12C2.97906 12 1.36105 11.5031 0 10.6406C0.247472 10.6687 0.485393 10.6781 0.742386 10.6781C2.17955 10.6781 3.50254 10.2 4.55902 9.38439C3.20749 9.35625 2.07487 8.48438 1.68464 7.28437C1.87501 7.31248 2.06535 7.33124 2.26524 7.33124C2.54125 7.33124 2.81729 7.29372 3.07425 7.22813C1.66562 6.94686 0.609114 5.72812 0.609114 4.25624V4.21876C1.01836 4.44376 1.49429 4.58438 1.9987 4.60311C1.17065 4.05935 0.628157 3.13124 0.628157 2.08123C0.628157 1.51874 0.780413 1.00311 1.04693 0.553111C2.56026 2.39061 4.83503 3.59059 7.38577 3.72186C7.33819 3.49686 7.30963 3.26251 7.30963 3.02813C7.30963 1.35936 8.6802 0 10.3839 0C11.269 0 12.0685 0.365624 12.6301 0.95625C13.3249 0.825006 13.9911 0.571868 14.5812 0.225002C14.3528 0.928142 13.8674 1.51877 13.2297 1.89374C13.8484 1.82815 14.448 1.65936 15 1.42501C14.5813 2.02499 14.0578 2.55934 13.4582 2.99061Z" fill="#CFCEDF" />
                                    </svg>
                                </a>
                            <?php } ?>
                            <?php $facebook = get_sub_field('facebook'); ?>
                            <?php if ($facebook) { ?>
                                <a href="<?php echo $facebook['url']; ?>" target="<?php echo $facebook['target']; ?>">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.61477 16V8.84375H0V6H2.61477V3.75938C2.61477 1.325 4.2375 0 6.60682 0C7.74205 0 8.71705 0.078125 9 0.1125V2.65625H7.35682C6.06818 2.65625 5.81932 3.21875 5.81932 4.04063V6H8.72727L8.32841 8.84375H5.81932V16" fill="#CFCEDF" />
                                    </svg>
                                </a>
                            <?php } ?>
                            <?php $youtube = get_sub_field('youtube'); ?>
                            <?php if ($youtube) { ?>
                                <a href="<?php echo $youtube['url']; ?>" target="<?php echo $youtube['target']; ?>">
                                    <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.6448 1.87759C16.4493 1.13853 15.8732 0.556469 15.1418 0.358938C13.8161 0 8.5 0 8.5 0C8.5 0 3.18398 0 1.85821 0.358938C1.1268 0.5565 0.550746 1.13853 0.355231 1.87759C0 3.21719 0 6.01213 0 6.01213C0 6.01213 0 8.80706 0.355231 10.1467C0.550746 10.8857 1.1268 11.4435 1.85821 11.6411C3.18398 12 8.5 12 8.5 12C8.5 12 13.816 12 15.1418 11.6411C15.8732 11.4435 16.4493 10.8857 16.6448 10.1467C17 8.80706 17 6.01213 17 6.01213C17 6.01213 17 3.21719 16.6448 1.87759ZM6.76135 8.54972V3.47453L11.2045 6.01219L6.76135 8.54972Z" fill="#CFCEDF" />
                                    </svg>
                                </a>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
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


<?php $apikey = get_field('api_key', 'option'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $apikey ?>"></script>
<script type="text/javascript">
    (function($) {
        function new_map($el) {
            var $markers = $el.find('.marker');
            var args = {
                zoom: 16,
                mapTypeControl: false,
                streetViewControl: false,
                center: new google.maps.LatLng(0, 0),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map($el[0], args);
            map.markers = [];
            $markers.each(function() {

                add_marker($(this), map);

            });
            center_map(map);
            return map;

        }

        function add_marker($marker, map) {
            var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
            map.markers.push(marker);
            if ($marker.html()) {
                var infowindow = new google.maps.InfoWindow({
                    content: $marker.html()
                });
                google.maps.event.addListener(marker, 'click', function() {

                    infowindow.open(map, marker);

                });
            }

        }

        function center_map(map) {

            var bounds = new google.maps.LatLngBounds();
            $.each(map.markers, function(i, marker) {

                var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

                bounds.extend(latlng);

            });

            // only 1 marker?
            if (map.markers.length == 1) {
                // set center of map
                map.setCenter(bounds.getCenter());
                map.setZoom(16);
            } else {
                map.fitBounds(bounds);
            }

        }
        var map = null;

        $(document).ready(function() {
            $('.acf-map').each(function() {

                map = new_map($(this));
            });
        });
    })(jQuery);
</script>

<?php get_footer(); ?>