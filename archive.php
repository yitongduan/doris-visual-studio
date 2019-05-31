<?php get_header() ; ?>
	
	<!-- HEADER INCLUDE STOPS HERE -->
	
	<!-- BEGIN MAIN TEMPLATE HERE -->
	

	<div class="wrapper">

		<section class="content">
			
			<div class="grid-group clearfix">

				<div class="grid-item grid-2 leftcol">

					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
					<?php /* If this is a category archive */ if (is_category()) { ?>
					<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h2>Archive for <?php the_time('F, Y'); ?>:</h2>
					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h2>Archive for <?php the_time('Y'); ?>:</h2>
					<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h2>Author Archive</h2>
					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && 
					!empty($_GET['paged'])) { ?>
					<h2>Blog Archives</h2>
					<?php } ?>
					
					<!-- HERE WE BEGIN OUR CONTENT LOOP -->
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

					<blockquote>
						<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					</blockquote>
					
					<h2><?php the_date(); ?> by <?php the_author(); ?></h2>

					<?php the_content(); ?>
					

					<?php endwhile; else: ?>
					    <?php _e('Sorry, no posts matched your criteria.'); ?>
					<?php endif; ?>
					
				</div> <!-- end left column container -->

				<div class="grid-item rightcol">
					
					<!-- HERE WE BEGIN OUR SIDEBAR CONTENT -->
					
					<?php get_sidebar(); ?>
				</div><!-- end right column container -->
				
			</div><!-- end column container-->

			</section> <!-- end content section -->
	</div><!-- END WRAPPER -->

<!-- MAIN TEMPLATE AREA ENDS HERE -->

<!-- FOOTER INCLUDE BEGINS HERE -->
<?php get_footer(); ?>



<!-- FOOTER INCLUDE ENDS HERE