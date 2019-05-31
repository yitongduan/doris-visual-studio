<!-- header -->
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row zuopinjibiaoti">
		<div class="col-md-12">
			<h3>
				My portfolio...
			</h3>
		</div>
	</div>
</div>

<!-- portfolio loop -->
<div class="container-fluid zuopinji">
	<div class="row">
		<?php 
		$args = array (
			'category_name'	=>	'gallery'
		);
		$myquery = new WP_Query( $args );

		if ( $myquery->have_posts() ) {
			while ( $myquery->have_posts() ) {
				$myquery->the_post();
		?>

		<div class="col-md-6 img-responsive center-block tupian">
			<?php the_post_thumbnail(); ?>
		    <h2><?php the_title(); ?></h2>
		    <p class="text-info"><?php the_content(); ?></p>
		</div>

		<?php
			}
		} else {
		
		    echo "<p>Error: Content not found.</p>";
		}

		wp_reset_postdata();
		?>
	</div>
</div>

	
<!-- <sign up form> -->
<div class="container-fluid contactform">
	<div class="row">
		<div class="col-md-12">
			<?php echo do_shortcode("[gdfrm_form id='1']"); ?>

		</div>
	</div>
</div>
<!-- <sign up form end> -->

<!-- footer -->
<?php get_footer(); ?>