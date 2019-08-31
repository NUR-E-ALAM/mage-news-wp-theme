<?php get_header(); ?>
			<div class="wrap">
				<div class="about">
				<?php get_sidebar(); ?>
					<div class="bloder-content">						
					<div class="bloger-grid">
						<?php
						if ( have_posts() ) :					
							while ( have_posts() ) :the_post();
							
							?>
										
						<div class="blog-img">
					<?php the_post_thumbnail('pop-up-banner', array('class' => 'alignleft')); ?>
						</div>
						<div class="bloger-content">
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<p><?php 
      the_content( '..details');
    //   the_excerpt();
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
			
						<div class="clear"> </div>
						<?php comments_template( ); ?>
					</div>					
					
					</div>
			
			</div>
			</div>
<div class="clear"> </div>
			<!-- End-content-gallery-->
			<!-- DC Pagination:C9 Start -->
	<div class="clear"> </div>
	<?php get_footer(); ?>
		
	</body>
</html>