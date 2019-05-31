<!-- header -->
<?php get_header(); ?>

<!-- carousal -->
<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>

<!-- my services -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center service1">
				My Services...
			</h3>
		</div>
	</div>
</div>

<div class="container-fluid servicepage">
	<div class="row">
		<?php 
			$args = array (
				'category_name'	=>	'servicepage'
			);

			$myquery = new WP_Query( $args );

			if ( $myquery->have_posts() ) {
				while ( $myquery->have_posts() ) {
					$myquery->the_post();
			?>

			<div class="col-sm-6">
				<?php the_post_thumbnail(); ?>
			</div>

			<div class="col-sm-6">
				<h3 class="iama"><?php the_title(); ?></h3>
				<p class="text-info">
				<?php the_content(); ?>
				</p>
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

<!-- <contact form> -->
<div class="container-fluid contactform">
	<div class="row">
		<div class="col-md-12">
			<?php echo do_shortcode("[gdfrm_form id='4']"); ?>
		</div>
	</div>
</div>
<!-- <contact form ends> -->

<!-- footer -->
<?php get_footer(); ?>