<?php
    if(isset($_GET['accepte-cookie'])){
      setcookie('accepte-cookie', 'true', time() + 365*24*3600);
      header('location: ./');
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/favicon.ico"/>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <p class="logo_img"><a href="https://stephaniejauffrineau.fr"><img src="<?= get_the_post_thumbnail_url(); ?>"></a></p>
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
          <p class="logo_img"><a href="https://stephaniejauffrineau.fr/boutique/"><img src="<?= get_the_post_thumbnail_url(); ?>"></a></p>
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
       
          <li class="section_link"><a href="https://stephaniejauffrineau.fr" class="nav__link">Accueil</a></li>
          <li class="section_link"><a href="https://stephaniejauffrineau.fr/blog/" class="nav__link">Blog</a></li>
          <li class="section_link"><a href="https://stephaniejauffrineau.fr/reservations/" class="nav__link">Réservations</a></li>
          <li class="section_link"><a href="https://stephaniejauffrineau.fr/boutique/" class="nav__link">Boutique</a></li>
          <li class="section_link"><a href="https://stephaniejauffrineau.fr/panier/" class="nav__link">Panier</a></li>
          <li class="section_link"><a href="https://stephaniejauffrineau.fr/contactez-moi/" class="nav__link">Contact</a></li>
        </ul>
  </div> 

      </nav>
      
  </header>

  

    <!--<section class="banner_img">
        <img src="/images/tree.png" class="tree_img rellax"  data-rellax-speed="-3" alt="tree">
    </section>-->
  </section>

  <?php
    if(!isset($_COOKIE['accepte-cookie'])){

    
    
?>
   <div id="cookie-notification" class="CookieMessage">
  <div class="CookieMessage-content"> 
    <p>En poursuivant votre navigation sur ce site, vous acceptez notre politique de confidentialité et l’utilisation de cookies pour vous proposer des contenus et services adaptés à vos centres d’intérêts.<p>
    <p><a id="cookie-notification-close" class="CookieMessage-button" href="?accepte-cookie">En savoir plus</a><a id="cookie-notification-close" class="CookieMessage-button" href="?accepte-cookie">Ok</a></p>
    
  </div>
</div>

<?php
    }
?>
  
    