<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->
<div class="row">
	<div class="text-center columns small-2">
		<?php if ( is_front_page() ) : ?>
            <h1><?php bloginfo( 'name' ); ?></h1>
        <?php endif; ?>
        <?php if ( !is_front_page() ) echo '<a href="' . home_url() . '" title="' . get_bloginfo( 'name' ) . '">'; ?>
            <img class="logo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/icon-random-acts.png" alt="<?php bloginfo( 'name' ); ?>" width="36" height="36" />
        <?php if ( !is_front_page() ) echo '</a>'; ?>
	</div>








	<div class="columns small-10">
		<div class="top-bar float-right" id="top-bar-menu">
			<div class="row">
				<div class="small-6 columns">
					<div class="float-left">
						<a data-toggle="form-callout">S</a>
					</div>
				</div>
				<div class="small-6 columns">
					<div class="top-bar-right show-for-medium">
						<?php joints_top_nav(); ?>	
					</div>
					<div class="top-bar-right show-for-small-only">
						<ul class="menu align-right">
							<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
							<li><button class="menu-icon dark" type="button" data-toggle="off-canvas"></button></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	

</div>

<div class="row">
	<div class="columns">
		<div class="is-hidden" id="form-callout" data-toggler="is-hidden">
		  	<?php echo get_search_form(); ?>
		</div>
	</div>
</div>