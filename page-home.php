<?php get_header(); ?>



		
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<h6 class="hl">
					Doris Visual Studio is a ...
				</h6>
				<br>
				<h4>
					Make it real!
				</h4>
				<button type="button" class="btn btn-primary subs">
					Subscribe now
				</button>
			</div>
			<div class="col-lg-6 col-sm-12">
				 <img class="thumbnail" src="<?php bloginfo('template_url'); ?>/images/visual.jpeg" alt="visual">
			</div>
		</div>
	</div>

<!-- <i am a > -->

		<?php 

$args = array (
	'category_name'	=>	'self'
);

// run the custom query with the supplied arguments from above
$myquery = new WP_Query( $args );

// if there is information that match that criteria, run a loop
if ( $myquery->have_posts() ) {
	while ( $myquery->have_posts() ) {
		$myquery->the_post();
?>

<!-- build your template here using HTML and template tags -->
<div class="col-sm-6">
	<?php the_post_thumbnail(); ?>
</div>
<div class="col-sm-6">
<h3 class="iama"><?php the_title(); ?></h3>
<p class="text-info">
<?php the_content(); ?>
</p>
</div>
<button type="button" class="btn btn-primary">
	Contact Me
</button>
<?php
	}
} else {
	// if there was nothing found, display an error message
    echo "<p>Error: Content not found.</p>";
}

// resets the loop data so you can either go back to using your one allowed standard loop
// or build more custom queries. You must use this to reset the loop after each custom
// query you use or things will break!
wp_reset_postdata();
?>
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
<!-- <i can do ends> -->
<div class="container-fluid">
        <div class="row">
<?php 
// define specifics for what type of content and/or what order you need
// find more here: https://codex.wordpress.org/Class_Reference/WP_Query
$args = array (
	'category_name'	=>	'service'
);

// run the custom query with the supplied arguments from above
$myquery = new WP_Query( $args );

// if there is information that match that criteria, run a loop
if ( $myquery->have_posts() ) {
	while ( $myquery->have_posts() ) {
		$myquery->the_post();
?>

<!-- build your template here using HTML and template tags -->
<div class="col-lg-4">
		<?php the_post_thumbnail(); ?>
       <h2><?php the_title(); ?></h2>
            	<p class="text-info"><?php the_content(); ?></p>
            <button type="button" class="btn btn-primary" >
				More
			</button>
</div>

<?php
	}
} else {
	// if there was nothing found, display an error message
    echo "<p>Error: Content not found.</p>";
}

// resets the loop data so you can either go back to using your one allowed standard loop
// or build more custom queries. You must use this to reset the loop after each custom
// query you use or things will break!
wp_reset_postdata();
?>
</div>
</div>









 <hr>

<!-- <div class="container-fluid">
		<div class="row"> -->
 <?php 
$args = array (
	'category_name'	=>	'clientsample'
);

// run the custom query with the supplied arguments from above
$myquery = new WP_Query( $args );

// if there is information that match that criteria, run a loop
if ( $myquery->have_posts() ) {
	while ( $myquery->have_posts() ) {
		$myquery->the_post();
?>

<!-- build your template here using HTML and template tags -->
<div class="col-md-12">
	<h3 class="clients">
		<?php the_title(); ?>
	</h3>
</div>
<div class="row">
	<div class="col-sm-4 col-xs-12">
			<?php the_content(); ?>
	</div>
</div>


<?php
	}
} else {
	// if there was nothing found, display an error message
    echo "<p>Error: Content not found.</p>";
}

// resets the loop data so you can either go back to using your one allowed standard loop
// or build more custom queries. You must use this to reset the loop after each custom
// query you use or things will break!
wp_reset_postdata();
?>


	<hr>

<!-- <sign up form> -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h5>Sign Up For Free</h5>
				<form action="/action_page.php">
					<div class="form-group">
					  <label for="email">Email address:</label>
					  <input type="email" class="form-control" id="email">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input type="password" class="form-control" id="pwd">
					</div>
					<div class="form-group form-check">
					  <label class="form-check-label">
					  <input class="form-check-input" type="checkbox"> Remember me
					  </label>
					</div>
					 <button type="submit" class="btn btn-primary">Login In</button>
					 <button type="submit" class="btn btn-primary">Sign up</button>
				</form>
			</div>
		</div>
	</div>
<!-- <sign up form end> -->


<?php get_footer(); ?>