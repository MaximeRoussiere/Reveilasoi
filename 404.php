<?php
get_header('classik');
?>

<div class="header_404">
    
    <section class="error_block">
        
        <div class="errorpage">
            <p>La page que vous recherchez n'existe pas... </p>
            <p>Vous pouvez retourner sur la page d'accueil <a href="<?= home_url(); ?>">ICI</a></p>
        </div>
    </section>
</div>
   
<?php
  get_footer(); 
  ?>