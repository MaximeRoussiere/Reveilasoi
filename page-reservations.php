<?php
get_header('blog');
?>


    <div class="page_home">

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

      <section class="page_content">

       <?php  the_content(); ?>

      </section>  

      <section class="page_image">

      <img  src="<?= get_the_post_thumbnail_url(); ?>">

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