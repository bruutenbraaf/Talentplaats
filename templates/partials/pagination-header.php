<?php
if (isset($item_type) && isset($view_data) && isset($view_data->meta)) {
    $pagination = $view_data->meta->pagination; ?>
    <span class="totalv"><?php echo $pagination->total; ?></span>
    <span class="totalc"><?php _e('vacatures', 'talentplaats'); ?></span>
<?php } ?>