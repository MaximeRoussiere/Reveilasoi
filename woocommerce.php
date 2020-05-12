<?php

get_header('shop');

?>


<div class="content">

    <div class="container">

<?php if ( have_posts() ) :

?>

    <div class="row">


        <div class="col-12">
               
                <?php woocommerce_content(); ?>


    </div>

    
    </div>


<?php endif; ?>

</div>

</div>


<?php
get_footer();
?>