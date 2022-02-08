<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Jay Patel">
  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?>
  </script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/assets/js/bootstrap.js'; ?>">
  </script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/bootstrap/dist/css/bootstrap.min.css'; ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>


  <body>
      <?php
      wp_body_open();
       ?>
    	<section class="section_1" style="background-image: <?php echo get_stylesheet_directory_uri().'/images/background_e4c1fy.jpg'; ?>">
    		<nav class="navBar">
    			<div class="logoImage">
              <a href="<?php bloginfo('url') ?>">
                <?php
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                  if ( has_custom_logo() ) {
                      echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                  } else {
                      echo '<h3 class="text-white" style="text-shadow:2px 2px 4px #000000; color:white;">' . get_bloginfo('name') . '</h3>';
                  } ?>
              </a>
    			</div>

    			<div class="navBarMenu">
    				<a href="<?php bloginfo('url') ?>"><div class="navBarMenuItem">Home</div></a>

            <?php
            wp_nav_menu( array(
              'container_class' => "navBarMenuItem",
              'menu_class' => "navBarMenuItem",
              'theme_location' => is_user_logged_in() ? 'logged-in-menu' : 'logged-out-menu',
            ) );
             ?>
    			</div>
    		</nav>

    		<header>
    			<h3 class="section_1_heading"><?php bloginfo('name') ?>s</h3>
          <br>
          <p class="section_1_sub"><?php bloginfo('description') ?></p>
    		</header>



    	</section>
