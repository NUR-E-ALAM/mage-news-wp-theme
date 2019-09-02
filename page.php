<?php

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

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

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

?>