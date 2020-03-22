<div class="pagination my-3">
	<?php
	global $wp_query;

	$big = 999999999; // need an unlikely integer

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'show_all'           => false,
		'end_size'           => 1,
		'mid_size'           => 2,
		'prev_next'          => true,
		// 'prev_text'          => __('&#11207;'),
		// 'next_text'          => __('&#11208;'),
		'prev_text'          => __('<i class="fa fa-caret-left"></i>'),
		'next_text'          => __('<i class="fa fa-caret-right"></i>'),
		'type'               => 'plain',
		'add_args'           => false,
		'add_fragment'       => '',
		'before_page_number' => '',
		'after_page_number'  => ''
	) );
	?>
</div>