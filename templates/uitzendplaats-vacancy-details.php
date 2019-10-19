<?php if ($view_data && property_exists($view_data, 'data')) { ?>


	<?php $afbeelding_geen_logo = get_field('afbeelding_geen_logo', 'option'); ?>
	<main id="sngl-vacansie">
		<div class="single-header vac-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumbs">
							<?php if (function_exists('yoast_breadcrumb')) {
									yoast_breadcrumb('');
								} ?>
						</div>
					</div>
					<div class="col-md-8">
						<div class="information-vacansie">
							<h1><?php the_title(); ?></h1>
							<div class="uzp__meta text-muted">
								<span class="location">
									<svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M6.99992 1.33333C5.58543 1.33333 4.22888 1.89524 3.22868 2.89543C2.22849 3.89562 1.66659 5.25218 1.66659 6.66667C1.66659 8.73204 3.01041 10.7362 4.48389 12.2915C5.20699 13.0548 5.93236 13.6796 6.4777 14.1139C6.68066 14.2755 6.85793 14.4101 6.99992 14.5151C7.1419 14.4101 7.31918 14.2755 7.52213 14.1139C8.06747 13.6796 8.79284 13.0548 9.51595 12.2915C10.9894 10.7362 12.3333 8.73204 12.3333 6.66667C12.3333 5.25218 11.7713 3.89562 10.7712 2.89543C9.77096 1.89524 8.41441 1.33333 6.99992 1.33333ZM6.99992 15.3333C6.63012 15.888 6.62976 15.8878 6.62976 15.8878L6.62785 15.8865L6.62341 15.8835L6.60813 15.8732C6.59515 15.8644 6.57664 15.8517 6.55296 15.8353C6.50561 15.8025 6.43756 15.7547 6.35178 15.6928C6.18028 15.5689 5.93749 15.3881 5.64713 15.1569C5.06747 14.6954 4.29284 14.0286 3.51595 13.2085C1.98943 11.5972 0.333252 9.26796 0.333252 6.66667C0.333252 4.89856 1.03563 3.20286 2.28587 1.95262C3.53612 0.702379 5.23181 0 6.99992 0C8.76803 0 10.4637 0.702379 11.714 1.95262C12.9642 3.20286 13.6666 4.89856 13.6666 6.66667C13.6666 9.26796 12.0104 11.5972 10.4839 13.2085C9.70699 14.0286 8.93236 14.6954 8.3527 15.1569C8.06235 15.3881 7.81955 15.5689 7.64806 15.6928C7.56228 15.7547 7.49423 15.8025 7.44688 15.8353C7.4232 15.8517 7.40469 15.8644 7.39171 15.8732L7.37643 15.8835L7.37199 15.8865L7.37058 15.8875C7.37058 15.8875 7.36972 15.888 6.99992 15.3333ZM6.99992 15.3333L7.36972 15.888C7.14579 16.0373 6.85369 16.0371 6.62976 15.8878L6.99992 15.3333Z" />
										<path fill-rule="evenodd" clip-rule="evenodd" d="M6.99992 5.33333C6.26354 5.33333 5.66659 5.93029 5.66659 6.66667C5.66659 7.40305 6.26354 8 6.99992 8C7.7363 8 8.33325 7.40305 8.33325 6.66667C8.33325 5.93029 7.7363 5.33333 6.99992 5.33333ZM4.33325 6.66667C4.33325 5.19391 5.52716 4 6.99992 4C8.47268 4 9.66659 5.19391 9.66659 6.66667C9.66659 8.13943 8.47268 9.33333 6.99992 9.33333C5.52716 9.33333 4.33325 8.13943 4.33325 6.66667Z" />
									</svg>
									<?php echo $view_data->data->location ?>
								</span>
								<span class="branches">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M17.5 1.73859V0.486523H8.33359V1.74496H5.79199V6.49629C7.76188 7.23968 9.16684 9.14429 9.16684 11.3712C9.16684 12.5476 8.3902 14.4763 6.79258 17.2676C6.56949 17.6573 6.3459 18.0359 6.13019 18.3933H12.3338V14.56H13.5837V18.3933H19.9998V1.74707L17.5 1.73859ZM12.2087 13.2593H9.83379V12.0094H12.2087V13.2593ZM12.2087 10.7593H9.83379V9.50941H12.2087V10.7593ZM12.2087 8.31687H9.83379V7.06699H12.2087V8.31687ZM12.2087 5.81687H9.83379V4.56699H12.2087V5.81687ZM16.0837 13.2593H13.7088V12.0094H16.0837V13.2593ZM16.0837 10.7593H13.7088V9.50941H16.0837V10.7593ZM16.0837 8.31687H13.7088V7.06699H16.0837V8.31687ZM16.0837 5.81687H13.7088V4.56699H16.0837V5.81687Z" fill="white" />
										<path d="M3.95902 10.1211C3.26973 10.1211 2.70898 10.6819 2.70898 11.3712C2.70898 12.0605 3.26973 12.6212 3.95902 12.6212C4.64832 12.6212 5.20906 12.0605 5.20906 11.3712C5.20906 10.6819 4.64832 10.1211 3.95902 10.1211Z" fill="white" />
										<path d="M3.95852 7.41266C1.77578 7.41266 0 9.18848 0 11.3712C0 13.0629 2.51105 17.2834 3.95852 19.5135C5.40594 17.283 7.91703 13.0619 7.91703 11.3712C7.91707 9.1884 6.14129 7.41266 3.95852 7.41266ZM3.95855 13.8711C2.58008 13.8711 1.45863 12.7496 1.45863 11.3712C1.45863 9.9927 2.58008 8.87125 3.95855 8.87125C5.33703 8.87125 6.45848 9.9927 6.45848 11.3712C6.45848 12.7496 5.33703 13.8711 3.95855 13.8711Z" fill="white" />
									</svg>
									<?php
										foreach ($view_data->data->branches->data as $key => $branche) {
											echo $branche->name;
											if ($key < count($view_data->data->branches->data) - 1) {
												echo ', ';
											}
										}
										?>
								</span>
								<span class="education">
									<svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.99941 8.56236L4.0332 6.72604V8.53265V9.79297C4.0332 11.2108 6.70526 12.3604 10.0012 12.3604C13.297 12.3604 15.9695 11.2108 15.9695 9.79297C15.9695 9.7818 15.9658 9.77059 15.9656 9.75968V6.72604L9.99941 8.56236Z" fill="#FFFFFF" />
										<path d="M0 4.61486L2.13141 5.37729L2.31305 4.98828L3.09607 4.92173L3.20772 5.03789L2.53581 5.19722L2.43788 5.48707C2.4377 5.48707 0.920153 8.65967 1.14304 10.2117C1.14304 10.2117 2.09029 10.7768 3.03714 10.2117L3.28877 5.96825V5.61503L4.69821 5.29707L4.59867 5.54221L3.5478 5.88393L4.03383 6.05756L10 7.89388L15.9662 6.05756L20 4.61488L10 0.767639L0 4.61486Z" fill="#FFFFFF" />
									</svg>
									<?php
										foreach ($view_data->data->education->data as $key => $edu) {
											echo $edu->name;
											if ($key < count($view_data->data->education->data) - 1) {
												echo ', ';
											}
										}
										?>
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 align-items-center justify-content-end d-flex hdbtn">
						<a href="#apply" class="btn"><?php _e('Direct solliciteren', 'talentplaats'); ?></a>
					</div>
				</div>
			</div>
			<hr>
			<div class="container inf--vac">
				<div class="row">
					<div class="col-md-6 col-6">
						<span class="posted">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.99984 1.99996C4.68613 1.99996 1.99984 4.68625 1.99984 7.99996C1.99984 11.3137 4.68613 14 7.99984 14C11.3135 14 13.9998 11.3137 13.9998 7.99996C13.9998 4.68625 11.3135 1.99996 7.99984 1.99996ZM0.666504 7.99996C0.666504 3.94987 3.94975 0.666626 7.99984 0.666626C12.0499 0.666626 15.3332 3.94987 15.3332 7.99996C15.3332 12.05 12.0499 15.3333 7.99984 15.3333C3.94975 15.3333 0.666504 12.05 0.666504 7.99996ZM7.99984 3.33329C8.36803 3.33329 8.6665 3.63177 8.6665 3.99996V7.58794L10.9646 8.73701C11.294 8.90167 11.4274 9.30212 11.2628 9.63143C11.0981 9.96075 10.6977 10.0942 10.3684 9.92958L7.70169 8.59624C7.47584 8.48332 7.33317 8.25247 7.33317 7.99996V3.99996C7.33317 3.63177 7.63165 3.33329 7.99984 3.33329Z" fill="#FF6600" />
							</svg>
							<b><?php
									$edited = strtotime($view_data->data->updated_at);
									echo date('d-m-Y H:i', $edited);
									?>
							</b>
						</span>
					</div>
					<div class="col-md-6 col-6 d-flex justify-content-end">
						<span class="refnr">
							<?php _e('Referentie:', 'talentplaats'); ?> <?php echo $view_data->data->refno; ?>
						</span>
					</div>
				</div>
			</div>
		</div>
		<?php if ($view_data->data->image_url_original) { ?>
			<div class="vac-img" style="background-image:url(<?php echo $view_data->data->image_url_original; ?>);">
			</div>
		<?php } ?>
		<section class="vac--inf">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-md-6">
						<div class="description-vacansie">
							<h2><?php _e('Algemeen', 'uitzendplaats'); ?></h2>
							<p class="description"><?php echo nl2br(htmlspecialchars($view_data->data->description)) ?></p>
						</div>
						<section class="profile">
							<div class="inner">
								<h2><?php _e('Informatie', 'leerbouwen'); ?></h2>
								<table>
									<tr>
										<th>
											<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15 1.1566L4.71429 11L0 6.48844L1.20857 5.33184L4.71429 8.6786L13.7914 1.25165e-07L15 1.1566Z" fill="#1CD265" />
											</svg>

											<?php _e('Location', 'uitzendplaats') ?>
										</th>
										<td><?php echo $view_data->data->location ?></td>
									</tr>
									<tr>
										<th>
											<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15 1.1566L4.71429 11L0 6.48844L1.20857 5.33184L4.71429 8.6786L13.7914 1.25165e-07L15 1.1566Z" fill="#1CD265" />
											</svg>

											<?php _e('Branche', 'uitzendplaats') ?>
										</th>
										<td><?php
												foreach ($view_data->data->branches->data as $key => $branche) {
													echo $branche->name;
													if ($key < count($view_data->data->branches->data) - 1) {
														echo ', ';
													}
												}
												?></td>
									</tr>
									<tr>
										<th>
											<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15 1.1566L4.71429 11L0 6.48844L1.20857 5.33184L4.71429 8.6786L13.7914 1.25165e-07L15 1.1566Z" fill="#1CD265" />
											</svg>

											<?php _e('Benodigde opleiding', 'uitzendplaats') ?>
										</th>
										<td>
											<?php
												if (count($view_data->data->education->data) > 0) {
													foreach ($view_data->data->education->data as $key => $education) {
														echo $education->name;
														if ($key < count($view_data->data->education->data) - 1) {
															echo ', ';
														}
													}
												} else {
													_e('None');
												}
												?>
										</td>
									</tr>
								</table>
							</div>
						</section>
					</div>
					<div class="col-xl-4 offset-xl-1 col-md-5 offset-md-1">
						<div class="recruiter">
							<div class="contact-person">
								<div class="heading">
									<div class="row d-flex align-items-center">
										<div class="col-8">
											<h2><?php _e('Recruiter', 'talentplaats'); ?></h2>
											<span class="cpname"><?php echo $view_data->data->recruiter->data->full_name; ?></span>
										</div>
										<div class="col-4">
											<?php if ($view_data->data->recruiter->data->photo_url) { ?>
												<div class="cpimg" style="background-image:url(<?php echo $view_data->data->recruiter->data->photo_url; ?>);"></div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="recruiterinfo">
								<h3><?php _e('Bereikbaar via:', 'talentplaats'); ?></h3>
								<a class="mail" href="mailto:<?php echo $view_data->data->recruiter->data->email; ?>">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6668 1.33325L7.3335 8.66659" stroke="#2D2D46" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M14.6668 1.33325L10.0002 14.6666L7.3335 8.66659L1.3335 5.99992L14.6668 1.33325Z" stroke="#2D2D46" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
									</svg><?php echo $view_data->data->recruiter->data->email; ?>
								</a>
								<a class="tel" href="tel:<?php echo $view_data->data->recruiter->data->phone; ?>">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.6665 11.28V13.28C14.6672 13.4657 14.6292 13.6494 14.5548 13.8195C14.4804 13.9897 14.3713 14.1424 14.2345 14.2679C14.0977 14.3934 13.9362 14.489 13.7603 14.5485C13.5844 14.6079 13.398 14.63 13.2131 14.6133C11.1617 14.3904 9.19113 13.6894 7.45979 12.5667C5.84901 11.5431 4.48335 10.1774 3.45979 8.56665C2.33311 6.82745 1.63195 4.84731 1.41313 2.78665C1.39647 2.60229 1.41838 2.41649 1.47746 2.24107C1.53654 2.06564 1.63151 1.90444 1.7563 1.76773C1.8811 1.63102 2.033 1.52179 2.20232 1.447C2.37164 1.37221 2.55469 1.33349 2.73979 1.33332H4.73979C5.06333 1.33013 5.37699 1.4447 5.6223 1.65567C5.86761 1.86664 6.02784 2.15961 6.07313 2.47998C6.15754 3.12003 6.31409 3.74847 6.53979 4.35332C6.62949 4.59193 6.6489 4.85126 6.59573 5.10057C6.54256 5.34988 6.41903 5.57872 6.23979 5.75998L5.39313 6.60665C6.34216 8.27568 7.7241 9.65761 9.39313 10.6067L10.2398 9.75998C10.4211 9.58074 10.6499 9.45722 10.8992 9.40405C11.1485 9.35088 11.4078 9.37029 11.6465 9.45998C12.2513 9.68568 12.8797 9.84224 13.5198 9.92665C13.8436 9.97234 14.1394 10.1355 14.3508 10.385C14.5622 10.6345 14.6746 10.953 14.6665 11.28Z" stroke="#2D2D46" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
									</svg><?php echo $view_data->data->recruiter->data->phone; ?>
								</a>
							</div>
							<div class="vac-act">
								<a href="#apply" class="btn"><?php _e('Direct solliciteren', 'leerbouwen'); ?></a>
							</div>
						</div>
					</div>
				</div>
			<?php } else { ?>
				<div class="uzp__message uzp__message--warning">
					<p><?php _e('The vacancy that you were looking for could not be found', 'uitzendplaats'); ?></p>
				</div>
			<?php } ?>
			<script>
				jQuery('p.description').readmore({
					speed: 75,
					collapsedHeight: 155,
					moreLink: '<a class="readmore" href="#">Lees meer</a>',
					lessLink: '<a class="readmore" href="#">Verbergen</a>'
				});
			</script>
			<div class="container app-form" id="apply">
				<div class="row">
					<div class="col-md-12">
						<h2><?php _e('Solliciteer <b>direct</b>', 'talentplaats'); ?></h2>
						<textarea type="text" name="user" class="about-you" placeholder="Vertel iets over jezelf"></textarea>
						</p>
						<button class="btn">
							<?php _e('Solliciteer', 'talentplaats'); ?>
						</button>
						</form>


						<script>
							jQuery(document).ready(function() {
								jQuery("button").click(function() {
									var x = jQuery("textarea").val();
									document.getElementById("inputMessage").value = x;
									jQuery('.modal-bx').toggleClass('modal-visible');
								});
								jQuery(".close-modal, .overlay").click(function() {
									jQuery('.modal-bx').toggleClass('modal-visible');
								});
							});
						</script>

						<div class="modal-bx">
							<div class="inner">
								<div class="container">
									<div class="row">
										<div class="col-md-10 offset-md-1">
											<div class="close-modal">
												<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M13.7938 10.8313L21.3826 3.24249L18.5542 0.414062L10.9654 8.00287L3.47833 0.515808L0.649902 3.34424L8.13696 10.8313L0.169434 18.7988L2.99786 21.6273L10.9654 13.6597L19.0347 21.729L21.8631 18.9006L13.7938 10.8313Z" fill="white" />
												</svg>
											</div>
											<div class="box">
												<?php echo do_shortcode('[uitzendplaats_application_form]'); ?>
											</div>
											<div class="overlay"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<section class="vac-items-w relate">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?php _e('Misschien ook wat voor jou?', 'talentplaats'); ?></h2>
				</div>
				<div class="col-md-12">
					<div class="arch--vac-items">
						<?php echo do_shortcode('[uitzendplaats_latest_vacancies]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>