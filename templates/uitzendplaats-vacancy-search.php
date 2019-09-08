<?php
/**
 * Provide a view for the vacancy search form
 *
 * @link https://www.uitzendplaats.nl
 * @since 1.0.0
 *
 * @package Uitzendplaats
 * @subpackage Uitzendplaats/public/templates
 */
?>
<form class="uzp uzp__search" method="POST" action="<?php echo get_site_url(null, get_option('uitzendplaats-options')['uzp-vacancy-search-results-page']) ?>">
    <input type="hidden" name="uzp_vacancy_search" value="true" />
    <div class="uzp-row">
        <div class="uzp__form-item uzp-col-xs-12 uzp-col-sm-5">
            <label class="uzp__label" for="inputQuery"><?php _e('Search', 'uitzendplaats'); ?></label>
            <input name="query" placeholder="<?php _e('Naar welke droombaan ben jij opzoek?', 'uitzendplaats'); ?>" id="inputQuery" class="uzp__input" value="<?php if(isset($_SESSION['uzp_vacancy_search']['query'])) { echo $_SESSION['uzp_vacancy_search']['query'];}?>" type="text">
        </div>
        <div class="uzp__form-item uzp-col-xs-6 uzp-col-sm-2">
            <label class="uzp__label" for="inputPostalCode"><?php _e('Zipcode', 'uitzendplaats'); ?></label>
            <input name="postal_code" placeholder="<?php _e('Zipcode', 'uitzendplaats'); ?>" id="inputPostalCode" class="uzp__input" value="<?php if(isset($_SESSION['uzp_vacancy_search']['postal_code'])) { echo $_SESSION['uzp_vacancy_search']['postal_code'];}?>" type="text">
        </div>
        <div class="uzp__form-item uzp-col-xs-6 uzp-col-sm-3">
            <label class="uzp__label" for="inputRadius"><?php _e('Radius', 'uitzendplaats'); ?></label>
            <div class="uzp__input-radius">
                <input name="radius" placeholder="<?php _e('Radius', 'uitzendplaats'); ?>" id="inputRadius" value="<?php if(isset($_SESSION['uzp_vacancy_search']['radius'])) { echo $_SESSION['uzp_vacancy_search']['radius'];}?>" class="uzp__input" type="number">
                <span class="uzp__input-addon"><?php _e('KM', 'uitzendplaats'); ?></span>
            </div>
        </div>
        <div class="uzp__form-item uzp-col-xs-12 uzp-col-sm-2">
            <button type="submit" class="uzp-button uzp-button--primary"><?php _e('Search', 'uitzendplaats'); ?></button>
        </div>
    </div>
</form>