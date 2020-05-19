<?php
get_header('blog');
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