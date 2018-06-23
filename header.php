<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
         <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
         <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
     <header>
       
         <div class="toggle">
         <span></span>
         <span></span>
         <span></span>
         <span>menu</span>
         </div>
            
        <nav class="header-mobile-menu">
         <ul>
         <li><a href="<?php echo home_url(); ?>">TOP</a></li>
         <li><a href="<?php echo home_url(); ?>/menu/">MENU</a></li>
         <li><a href="<?php echo home_url(); ?>/event/">EVENT</a></li>
         <li><a href="<?php echo home_url(); ?>/access/">ACCESS</a></li>
         <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
         <li><a href="<?php echo home_url(); ?>/blog/">BLOG</a></li>
         </ul>
         </nav>
         
          <div class="container">
      
            <h1><a href="<?php echo home_url(); //トップページのURLを出力 ?>">Watepu Cafe</a></h1>
            
        </div>
         
         <div class="slide">
         <?php
        echo do_shortcode("[metaslider id=134]");
      ?>
         </div>
         
         <nav class="header-pc-menu">
         <ul>
         <li><a href="<?php echo home_url(); ?>">TOP</a></li>
         <li><a href="<?php echo home_url(); ?>/menu/">MENU</a></li>
         <li><a href="<?php echo home_url(); ?>/event/">EVENT</a></li>
         <li><a href="<?php echo home_url(); ?>/access/">ACCESS</a></li>
         <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
         <li><a href="<?php echo home_url(); ?>/blog/">BLOG</a></li>
         </ul>
         </nav>
         
    </header>