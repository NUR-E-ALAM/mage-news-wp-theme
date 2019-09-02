<?php get_header(); ?>
			<div class="wrap">
				<div class="about">
				<?php get_sidebar(); ?>
					<div class="bloder-content">	
					<?php
						if ( have_posts() ) :					
							while ( have_posts() ) :the_post();
							
							?>
													
					<div class="bloger-grid">
								
						<div class="blog-img">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?></a>
						</div>
						<div class="bloger-content">
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<p><?php 
	//   the_content( '..details');
	// the_post();
      the_excerpt();
      _e("<strong>Category:</strong>");
      the_category( " | ");  
      _e("<hr>");          
      the_tags( );
      ?></p>		
						</div>
						<div class="clear"> </div>
					</div>					
					
					</div>
					<?php
			endwhile;
        else :
            _e("<h1>no post available</h1>");
		endif;
		?>
			</div>
			
			</div>
		
<div class="clear"> </div>
			<!-- End-content-gallery-->
			
			<!-- DC Pagination:C9 Start -->
			<div class="wrap">
	<!-- DC Pagination:A3 Start -->

							<!-- DC Pagination:A3 End -->
				<div class="clear"> </div>
				<?php  the_posts_pagination(); ?>
				
				
	<!-- DC Pagination:C9 End -->
		</div>
	<div class="clear"> </div>
	<?php get_footer(); ?>
		
