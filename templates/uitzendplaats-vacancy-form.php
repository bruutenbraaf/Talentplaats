<?php if (!isset($hide_title) || $hide_title !== true) { ?>
	<?php if (isset($view_data) && property_exists($view_data, 'data')) { ?>
		<h2><?php _e('Apply for', 'uitzendplaats'); ?> <b><?php echo $view_data->data->title ?></b></h2>
		<input type="hidden" name="id" id="inputID" value="<?php echo $vacancy_id ?>" />
	<?php } else { ?>
		<h1><?php _e('Apply for a vacancy', 'uitzendplaats'); ?></h1>
	<?php } ?>
<?php } ?>
<div class="uzp">
	<form class="uzp__vacancy-form" name="uzp__vacancy-form">

		<div class="uzp__form-success-message">
			<?php _e('Your application has been submitted. We will contact you as soon as possible.', 'uitzendplaats'); ?>
		</div>

		<div class="uzp__form-group uzp-row">
			<input type="text" class="uzp__form-control" id="inputFirstName" name="first_name" placeholder="<?php _e('First name', 'uitzendplaats'); ?>">
			<p class="uzp__help-block" data-validate-for="first_name"></p>
		</div>

		<div class="uzp__form-group uzp-row">

			<input type="text" class="uzp__form-control" id="inputPrefix" name="prefix" placeholder="<?php _e('Middle name', 'uitzendplaats'); ?>">
			<p class="uzp__help-block" data-validate-for="prefix"></p>
		</div>

		<div class="uzp__form-group uzp-row">
			<input type="text" class="uzp__form-control" id="inputLastName" name="last_name" placeholder="<?php _e('Last name', 'uitzendplaats'); ?>">
			<p class="uzp__help-block" data-validate-for="last_name"></p>
		</div>

		<div class="uzp__form-group uzp-row">
			<input type="text" class="uzp__form-control" id="inputEmail" name="email" placeholder="<?php _e('your@email.com', 'uitzendplaats'); ?>">
			<p class="uzp__help-block" data-validate-for="email"></p>
		</div>

		<div class="uzp__form-group uzp-row">
			<input type="text" class="uzp__form-control" id="inputPhone" name="phone" placeholder="06 - 1234 4321">
			<p class="uzp__help-block" data-validate-for="phone"></p>
		</div>

		<div class="uzp__form-group uzp-row">
			<label for="inputCv" class="uzp-col-sm-3 uzp__control-label"><?php _e('Resume', 'uitzendplaats'); ?></label>

			<input type="file" class="uzp__form-control uzp__file-select" id="inputCv" name="cv">
			<p class="uzp__help-block" data-validate-for="cv"></p>
			<p class="uzp__help-block--hidden uzp__help-block--filesize"><?php _e('The maximum allowed filesize is 2MB', 'uitzendplaats'); ?></p>

		</div>

		<div class="uzp__form-group uzp-row">
			<textarea class="uzp__form-control" rows="5" id="inputMessage" name="message" placeholder="<?php _e('Accompanying message', 'uitzendplaats'); ?>"></textarea>
			<p class="uzp__help-block" data-validate-for="message"></p>
		</div>

		<div class="uzp__form-group uzp-row">
			<div class="row d-flex align-items-center wo">
				<div class="col-md-9">
					<div class="uzp__checkbox">
						<label>
							<input type="checkbox" name="accept_terms" value="true" id="acceptTerms" />
							<?php _e('The personal data you have entered in this form will only be used for purposes that the legislator allows. When you send this form you give permission process the data you provide. For more information see our <a href=/privacy/ target=_blank>privacy statement</a>.', 'uitzendplaats'); ?>
						</label>
					</div>
					<p class="uzp__help-block" data-validate-for="accept_terms"></p>
				</div>
				<div class="col-md-3 d-flex justify-content-end">
					<button type="submit" class="btn"><?php _e('Verstuur sollicitatie', 'uitzendplaats'); ?></button>
				</div>
			</div>
		</div>
	</form>
</div>