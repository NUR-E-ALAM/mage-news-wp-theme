<div class="services-sidebar">
					<h4>Categories</h4>
                    <?php 
// foreach((get_the_category()) as $category) { 
//     echo $category->cat_name . ' <br>'; 
// } 

the_category( );
?>
                    <br>
					<h4>Archives</h4>
					<?php the_archive_title( );?>
				</div>