<?php global $wp; ?>
<?php if ($pagination->total_pages > 1) { ?>
	<ul class="uzp__pagination">
		<?php if ($pagination->current_page > 1) { ?>
			<li class="prev">
				<a href="<?php echo ($pagination->current_page - 1 !== 1) ? get_permalink() . ($pagination->current_page - 1) . '/' : get_permalink(); ?>">
					<span class="next">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 8H15M15 8L8 1M15 8L8 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</span>
				</a>
			</li>
		<?php } else { ?>
		<?php } ?>

		<?php for ($page = 1; $page <= $pagination->total_pages; $page++) {
				if ($pagination->current_page != $page) { ?>
				<li>
					<a href="<?php echo ($page != 1) ? get_permalink() . $page . '/' : get_permalink(); ?>">
						<?php echo $page ?>
					</a>
				</li>
			<?php } else { ?>
				<li class="current">
					<div class="uzp__pagination-item"><?php echo $page ?></div>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if ($pagination->total_pages > $pagination->current_page) { ?>
			<li class="nxt">
				<a href="<?php echo get_permalink() . ($pagination->current_page + 1) . '/' ?>">
					<span class="next">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 8H15M15 8L8 1M15 8L8 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</span>
				</a>
			</li>
		<?php } ?>
	</ul>
<?php } ?>