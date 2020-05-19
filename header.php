<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/favicon.ico"/>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="style.css" />
  <!--<link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">-->

  <?php
wp_head();
?>
</head>



<body>

  <!--<div class="preloader">
    <div class="loader">
    <div class="bg"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    </div>
  </div>-->
    
  
  <header  class="header">

  <?php

      $navmobile_pages_query=new WP_QUERY(
      [
      'post_type'=> 'page',
      'post_parent'=> 44,
      'orderby' => 'menu_order',
      'order'=> 'ASC',
      'posts_per_page'=> -1
      ]
      );


      if ($navmobile_pages_query->have_posts()) :

      ?>   

<div class="responsive-bar">

      <?php

      while ($navmobile_pages_query->have_posts()) :
      $navmobile_pages_query->the_post();
      ?>

      <section class="logo">
        <p class="logo_img"><a href="http://localhost/projetspersos/Reveil-theme/"><img src="<?= get_the_post_thumbnail_url(); ?>"></a></p>
      </section>
    
      <div class="menu">
      <h4 id="navigation-menu"><i class="fa fa-bars" aria-hidden="true"></i><?php the_title(); ?></h4>
      </div>

      <?php
            endwhile;
          ?>

        
    </div>

          <?php
            endif;
          ?>


    
    <?php

      $nav_pages_query=new WP_QUERY(
      [
      'post_type'=> 'page',
      'post_parent'=> 2,
      'orderby' => 'menu_order',
      'order'=> 'ASC',
      'posts_per_page'=> -1
      ]
      );


      if ($nav_pages_query->have_posts()) :

      ?>   
      

    <nav  class="navigation">

    <?php

        while ($nav_pages_query->have_posts()) :
        $nav_pages_query->the_post();
        ?>
  
        <section  class="logo">  
          <p class="logo_img"><a href="<?php home_url() ?>"><img src="<?= get_the_post_thumbnail_url(); ?>"></a></p>
          <h1  class="logo_content"><?php the_title(); ?>
          <br><span><?php the_content(); ?></span></h1>
           
        </section>

        <?php
            endwhile;
          ?>

        <?php
            endif;
          ?>

        <?php /*
    wp_nav_menu(
    [
      'theme_location'=>'header-menu',
      'menu_class'=>'navigation_link',
      'container'=>'div',
      'container_class'=>'navigation_right', 
    ]
    ); */
    ?>

     <div class="navigation_right">  

    <ul class="navigation_link">
       
          <li class="section_link"><a href="#home" class="nav__link">Accueil</a></li>
          <li class="section_link"><a href="#hypnose" class="nav__link">Hypnose</a></li>
          <li class="section_link"><a href="#relaxation" class="nav__link">Relaxation</a></li>
          <li class="section_link"><a href="#accessbar" class="nav__link">Access bar</a></li>
          <li class="section_link"><a href="#deroulement" class="nav__link">Déroulement</a></li>
          <li class="section_link"><a href="#tarifs" class="nav__link">Tarifs</a></li>
          <li class="section_link"><a href="#apropos" class="nav__link">A propos</a></li>
          <li class="section_link"><a href="#contact" class="nav__link">Contact</a></li>
        </ul>
  </div> 

      </nav>
  </header>

  <?php

        if ( have_posts() ) :
            while ( have_posts() ) :
            the_post();

  ?>



  <section id="home"  class="banner">

  <?php
        the_post_thumbnail(
            'post-thumbnail',
            [
                'class' => 'banner__image',
            ]
        );
        ?>

  
    <header class="banner__header rellax" data-rellax-speed="-5">

    

        <h1 class="banner__header__title " ><?php the_title(); ?></h1>
        <h2 class="banner__header__content"><?php the_content(); ?></h2>
        
        <div class="buttons">
            <div  class="button_home"><a href="<?= get_post_type_archive_link('post') ?>" class="button_link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/clovers.png" class="clovers"  alt="clovers">Mon blog<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/stars.png" class="stars"  alt="stars"></a></div>
            <div  class="button_home"><a href="<?php echo esc_url( get_page_link( 122 ) ); ?>" class="button_link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/calendar.png" class="calendar"  alt="clovers">Réservez votre séance</a></div>

        </div>
  
        </header>

        
        <?php
            endwhile;
            endif;      
            ?>

    <!--<section class="banner_img">
        <img src="/images/tree.png" class="tree_img rellax"  data-rellax-speed="-3" alt="tree">
    </section>-->
  </section>

  