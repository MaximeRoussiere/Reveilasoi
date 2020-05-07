<?php
get_header('classik');
?>



    <?php
    if (have_posts()) :

    ?>

          

        <div class="page">
        <?php

      while (have_posts()) :
       the_post();
      ?>
        
      <section class="page_title">

      <?php  the_title();?>
      
      </section>

      <section class="page_classik_content">

       <?php  the_content(); ?>

      </section>  

      <section class="page_classik_image">

      <img  src="<?= get_the_post_thumbnail_url(); ?>">

      </section>
          
          
          </div>
    
    <?php
    endwhile;

    ?>

  

    <?php
    endif;
?>

<?php
  get_footer(); 
  ?>