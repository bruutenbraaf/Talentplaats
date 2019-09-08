<?php

/**
 * Provide a view for the vacancy widget
 *
 * @link https://www.uitzendplaats.nl
 * @since 1.0.0
 *
 * @package Uitzendplaats
 * @subpackage Uitzendplaats/admin/partials
 */
?>

<?php if (empty($view_data)) { ?>
	<p><?php _e('No vacancies found', 'uitzendplaats'); ?></p>
<?php } else { ?>
	<?php foreach ($view_data->data as $key => $item) { ?>
		<div class="item">
			<a href="<?php echo get_site_url(null, get_option('uitzendplaats-options')['uzp-vacancy-index-page'] . '/' . sanitize_title($item->title) . '/' . $item->id . '/') ?>"><?php echo $item->title ?></a>
		</div>
	<?php } ?>
<?php } ?>