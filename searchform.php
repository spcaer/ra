<form class="row small-collapse" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="small-11 columns">
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
	</div>
	<div class="small-1 columns">
		<input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'S', 'jointswp' ) ?>" />
	</div>
</form>