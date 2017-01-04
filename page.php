<?php get_header(); ?>
	
	<div id="content">
	
		<div class="row">
			<div class="columns">
				<p>At Random Acts, it's our mission to conquer the world one random act of kindness at a time. We are here to inspire acts of kindness around the world both big and small. We provide a vast network of caring people with the encouragement and support they need to change lives for the better.</p>
			</div>
		</div>

		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-8 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>