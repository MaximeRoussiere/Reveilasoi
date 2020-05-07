<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
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

    <section class="block_logo">
      <section class="logo">
        <p class="logo_img"><a href="<?php home_url() ?>"><img src="<?= get_the_post_thumbnail_url(); ?>"></a></p>
      </section>
    
      <div class="menu">
        <h4 id="navigation-menu"><?php the_title(); ?></h4>
      </div>
    </section>
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
      

    <nav  class="navigation_blog">

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

    <div class="navigation_center">
       <h2 class="blog_title"> <a href="http://localhost/projetspersos/Reveil-theme/mon-blog/">Bienvenue sur Reveil à soi</a></h2>
    </div>


    <div class="navigation_right">  
      <ul class="navigation_link">
       
          <li class="section_link"><a href="http://localhost/projetspersos/Reveil-theme/" class="nav__link">Accueil</a></li>
          <li class="section_link"><a href="http://localhost/projetspersos/Reveil-theme/#contact" class="nav__link">Contact</a></li>

      </ul>
    </div> 

      </nav>
  </header>



  