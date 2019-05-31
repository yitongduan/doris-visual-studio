<div class="container-fluid">
   <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-sm-3">
          <?php dynamic_sidebar('smartslider_area_1'); ?>
        </div>
            <?php 
              $args = array (
                'category_name' =>  'footer'
              );

              $myquery = new WP_Query( $args );

              if ( $myquery->have_posts() ) {
                while ( $myquery->have_posts() ) {
                  $myquery->the_post();
              ?>
              <div class="col-3">
                <h3><?php the_title(); ?></h3>
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
  </footer>
</div>

<!-- Bootstrap core JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-jquery@3.0.0/src/simpleParallax.min.js"></script>
		<script>
			$('img').simpleParallax();
		</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- <end> -->
  <?php wp_footer(); ?>
  </body>
</html>