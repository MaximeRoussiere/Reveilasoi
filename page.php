<?php
get_header('blog');
?>



    <?php
    if (have_posts()) :

    ?>

          

        <div class="legalmentions">
        <?php

      while (have_posts()) :
       the_post();
      ?>
        
      <section class="legalmentions_title">

      <?php  the_title();?>
      
      </section>

      <section class="legalmentions_block">

       <?php  the_content(); ?>

      </section>  

      <section class="legalmentions_image">

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