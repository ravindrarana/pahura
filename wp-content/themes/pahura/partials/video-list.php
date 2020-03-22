<div class="col-md-3">
	<div class="card post-card mb-4 z-depth-0">
		<div class="video-container">
			<?php
			$url = get_field('video', false, false);
			$oembed = _wp_oembed_get_object();
			// $oembed = new WP_oEmbed();
			$provider = $oembed->get_provider($url);
			$oembed_data = $oembed->fetch( $provider, $url, array('width' => 300, 'height' => 175) );
			$thumbnail = $oembed_data->thumbnail_url;
			// $iframe = $oembed_data->html;
			$md_thumbnail = str_replace('hqdefault', 'mqdefault', $thumbnail);
			?>
			<a href="<?php echo the_permalink(); ?>">
				<img class="card-img-top img-fluid" src="<?php echo $md_thumbnail; ?>" alt="">
			</a>
		</div>
		<div class="card-body grey lighten-5">
			<h6 class="h6-responsive">
				<a class="mdb-color-text post-title" href="<?php esc_url( the_permalink() ); ?>">
					<?php echo esc_html(the_title()); ?>
				</a>
			</h6>
		</div>
	</div>
</div>