<?php
get_header('shop');
?>



    <?php
    if (have_posts()) :

    ?>
        
        
      

      

      

       <?php  woocommerce_content(); ?>


     
        

  

    <?php
    endif;
?>

<?php
  get_footer(); 
  ?>