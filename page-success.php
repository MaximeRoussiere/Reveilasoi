<?php
get_header('classik');
?>


    <div class="page_home">

    <?php
    if (have_posts()) :

    ?>

          

        <div class="page_success">
        <?php

      while (have_posts()) :
       the_post();
      ?>
        
      <section class="page_success_title">

      <?php  the_title();?>
      
      </section>

      <section class="page_success_content">

       <?php  the_content(); ?>
    
        

       
        <section class="page_success_blocklink">
            <div class="link_image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/link.png" alt="">
            </div>
            <div class="page_success_list">
                <img class="link_image_list" src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/homelink.png" alt="home"><a href="http://localhost/projetspersos/Reveil-theme/" class="page_success_content_link">Retour sur la page d'accueil</a></br>
                <img class="link_image_list" src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/calendar.png" alt="calendar"><a href="http://localhost/projetspersos/Reveil-theme/reservations" class="page_success_content_link">Retour sur la page des réservations</a></br>
                <img class="link_image_list" src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/stars.png" alt="stars"><a href="http://localhost/projetspersos/Reveil-theme/blog" class="page_success_content_link">Découvrez mon blog, et plein de petites astuces</a>
            </div>
        </section>
       

        <section class="page_success_image">

            <img  src="<?= get_the_post_thumbnail_url(); ?>">

        </section>

          </section> 
          
          </div>
    
    <?php
    endwhile;

    ?>

  </div>

    <?php
    endif;
?>

<?php
  get_footer(); 
  ?>