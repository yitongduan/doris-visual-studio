<!-- header -->
<?php get_header(); ?>

<!-- portrait -->
<div class="container-fluid portrait">
	<div class="row">
		<div class="col-md-12">
			<?php 

			$args = array (
				'category_name'	=>	'portrait'
			);

			$myquery = new WP_Query( $args );

			if ( $myquery->have_posts() ) {
				while ( $myquery->have_posts() ) {
					$myquery->the_post();
			?>

			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail(); ?>

			<?php
				}
			} else {
				
			    echo "<p>Error: Content not found.</p>";
			}

			wp_reset_postdata();
			?>
		</div>
	</div>

<!-- contact form -->
	<div class="row">	
		<div class="col-md-12 contactform">
			<?php echo do_shortcode("[gdfrm_form id='1']"); ?>
		</div>
		<div class="col-md-12"> 
			<address>
				<strong>Doris Visual Studio.</strong><br /> 111 Woodroffe Avenue<br /> Ottawa, Ontario<br /> <abbr title="Phone">P:</abbr> (123) 456-7890
			</address>
			<?php echo do_shortcode("[wpgmza id='1']"); ?>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 ditu">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5607.91525870012!2d-75.75914377476829!3d45.349667566398786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce0722395fc63d%3A0x35c46b5ff47a522!2sAlgonquin+College%2C+1385+Woodroffe+Ave%2C+Nepean%2C+ON+K2G+3G7!5e0!3m2!1sen!2sca!4v1543594876263" width="700" height="350" frameborder="0" allowfullscreen></iframe>
		</div>
		</div>


</div>

<!-- 
social icon -->
<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>


<!-- footer -->
<?php get_footer(); ?>