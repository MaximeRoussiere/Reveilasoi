<?php
get_header('shop');
?>



    <?php
    if (have_posts()) :

    ?>
        
        
      

      

    <div class="shop_page">

       <?php  woocommerce_content(); ?>


     </div>
        

  

    <?php
    endif;
?>

<?php
  get_footer(); 
  ?>