<?php
get_header('book');

if (have_posts()) :

    ?>

    <section class="blog_home">

    <?php

    while (have_posts()) :
       the_post();
          
?>
        <div class="page">
        
        <?php
        the_title();
        the_content();
        ?>
          </div>
    
    <?php
    endwhile;

    ?>

</section>

    <?php
    endif;


  get_footer(); 
  ?>