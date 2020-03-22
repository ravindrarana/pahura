<div class="col-md-4">
	<?php
	$epaper = get_field('epaper');
	$filesize = $epaper['filesize'];
	$filesize = size_format($filesize, 2);
	$download_link = $epaper['url'];
	?>
	<div class="card epaper-card mb-4 z-depth-0">
		<img class="card-img-top img-fluid" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php echo esc_html(get_the_title()); ?>">
		<div class="title-container">
			<?php echo esc_html(the_title()); ?>
		</div>
		<div class="download-container">
			<div class="file-details text-center">
				<div><?php echo esc_html(the_title()); ?></div>
			</div>
			<div class="download-link align-self-center flex-grow-1 d-flex">
				<div class="my-auto">
					<a class="btn btn-primary z-depth-0 d-flex" href="<?php echo esc_html($download_link); ?>" target="_blank">
						<div><i class="fa fa-cloud-download-alt fa-2x mr-2"></i></div>
						<div class="text-center small">
							<div>Download</div>
							<div>( <?php echo $filesize; ?> )</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>