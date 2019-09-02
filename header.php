
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href='//fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>
	</head>
	<body <?php echo body_class();?>>
		<!-- Start-wrap -->		
			<!-- Start-Header-->			
			<div class="header">
				<div class="wrap">
				<!-- Start-logo-->
				<div class="logo">
					<?php
					 the_custom_logo();
?>
				</div>				
				<!-- End-Logo-->
				<!-- Start-Header-nav-->	
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />			
				<div class="clear"> </div>				
				<!-- End-Header-nav-->
			</div>
			</div>
			<div class="header-nav1">
				<div class="wrap">
                    <?php
                   wp_nav_menu(
                       array(
                           "theme_location" => "magemanu"
                         
                       )
                   );
                   
                   ?>				
				<div class="search-bar">
				<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  <button type="submit" role="button" class="btn btn-default right"/><span class="glyphicon glyphicon-search white"></span>Search</button>
</form>
				</div>
				</div>				
			<!-- End-Header-->
			<div class="clear"> </div>
			<!-- content-gallery-->
			</div>