<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  	   <!-- Required meta tags -->
     <meta charset="<?php bloginfo( 'charset' ); ?>">
     <link rel="profile" href="http://gmpg.org/xfn/11">
     <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
     <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/styles.css">


    <title><?php wp_title( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body> 
<!--     nav bar -->
  	<body <?php body_class(); ?>>
      <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light">
        <a class="navbar-brand logo" href="<?php echo home_url(); ?>">Doris Visual Studio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse daohang" id="navbarCollapse">
         <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
        </div>
      </nav>
