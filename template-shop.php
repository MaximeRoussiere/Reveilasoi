<?php

/*
Template Name: Shop Page
*/

?>

<?php

get_header('blog');

?>

      

        
                  <?php
              if (have_posts()) :
            
                while (have_posts()) :
                the_post();
                ?>
                <?php the_title(); ?>
                          <?php the_content(); ?>

          <?php endwhile; ?>
          <?php endif; ?>



<?php
get_footer();
?>