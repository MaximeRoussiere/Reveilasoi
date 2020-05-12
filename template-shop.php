<?php

/*
Template Name: Shop Page
*/

?>

<?php

get_header('shop');

?>


<div class="content">

    <div class="container">

    <?php
    if (have_posts()) :

      while (have_posts()) :
       the_post();
      ?>

    <div class="row">


        <div class="col-12">
        <?php the_title(); ?>
                <?php the_content(); ?>


    </div>

    
    </div>

    <?php endwhile; ?>
<?php endif; ?>

</div>

</div>


<?php
get_footer();
?>