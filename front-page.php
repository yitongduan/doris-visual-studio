<!-- header -->
<?php get_header(); ?>

<!-- banner -->
<div class="container-fluid bg">
	<div class="row">
		<?php 
		$args = array (
			'category_name'	=>	'dorisisa'
		);
		$myquery = new WP_Query( $args );

		if ( $myquery->have_posts() ) {
			while ( $myquery->have_posts() ) {
				$myquery->the_post();
		?>

		<div class="col-lg-6 col-sm-12">
			<h6 class="hl">
				<?php the_title(); ?>
			</h6>
			<h4>
			<?php the_content(); ?>
			</h4>
			<button type="button" class="btn subs">
				<a href="<?php echo get_permalink( 65 ); ?> ">Subscribe now</a>
			</button>
		</div>

		<div class="col-lg-6 col-sm-12">
			<?php the_post_thumbnail(); ?>
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

<!-- <i am a > -->
<div class="container-fluid">
	<div class="row">
		<?php 
			$args = array (
				'category_name'	=>	'self'
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
<!-- <i am a ends> -->

<hr>

<!-- I can do.. -->
<div class="container-fluid">
  <div class="row">
	<div class="col-md-12">
		<h3 class="icando">
			I can do...
		</h3>
    </div>
  </div>
</div>

<div class="container-fluid yuanxing">
	<div class="row">
		<?php 
		$args = array (
			'category_name'	=>	'service'
		);
		$myquery = new WP_Query( $args );

		if ( $myquery->have_posts() ) {
			while ( $myquery->have_posts() ) {
				$myquery->the_post();
		?>

		<div class="col-lg-4">
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
<!-- <i can do ends> -->

<hr>

<!-- my clients -->
<div class="container-fluid">
  <div class="row">
	<div class="col-md-12">
		<h3 class="icando">
			My clients are...
		</h3>
    </div>
  </div>
</div>
<?php get_sidebar(); ?>

<hr>

<!-- <sign up form> -->
<div class="container-fluid signup">
	<div class="row">
		<div class="col-md-12">
			<?php echo do_shortcode("[gdfrm_form id='3']"); ?>
		</div>
	</div>
</div>
<!-- <sign up form end> -->
	
<!-- footer -->
<?php get_footer(); ?>