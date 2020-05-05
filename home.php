<?php
get_header('nav');
?>




<?php // checks if there are any posts that match the query
 if (have_posts()) :
  ?>
<section class="blog_home">

<div class="categories">
  <ul>
    <li><a href="http://localhost/projetspersos/Reveil-theme/mon-blog/">tous les articles</a></li>
    <?php wp_list_categories('title_li='); ?>
  </ul>
</div>

<div class="authors">
  <ul>
    <li><a href="http://localhost/projetspersos/Reveil-theme/mon-blog/">tous les auteurs</a></li>
    <?php wp_list_authors('title_li='); ?>
  </ul>
</div>

<?php
  
   // If there are posts matching the query then start the loop
   while ( have_posts() ) : the_post();
  
     // the code between the while loop will be repeated for each post
     ?>
 
 
 
<div class="blog">

     
  
     <p class="blog_content">Le <span><?php the_time( 'd M Y' ); ?></span> par <span><?php the_author(); ?></span></p>
     
     <a href="<?php the_permalink() ?>">
     <?php if ( has_post_thumbnail() ) { ?>
        <img class="blog_img" src="<?= get_the_post_thumbnail_url(); ?>">
     <?php }  else { ?>
      <img class="blog_img" src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/default-images.jpg" alt="marche pas" />
      <?php } ?>
     </a>
      
      <h2  <?php the_ID(); ?>><a class="blog_link_title" href="<?php the_permalink() ?>"  <?php the_title(); ?>><?php the_title(); ?></a></h2>
     
      <p class="blog_content"><?php echo wp_trim_words( get_the_excerpt(), 15, '[...]')?><a class="blog_link" href="<?php the_permalink() ?>"> Lire plus </a></p>
      


  <div class="blog_btn">
    <?php
    $categories = get_the_category();
        foreach ($categories as $category) : 
        ?>
        <a href="<?= get_category_link($category->term_id); ?>"  class="btn-<?= strtolower($category->name) ?>"><?= $category->name ?></a> 
        <?php endforeach; ?>

   <?php
    /*$bienetres = get_terms(['taxonomy' => 'bien-être']); ?>

    <?php
    foreach ($bienetres as $category) : 
    
    ?>
    <button href="" type="button" class="btn" ><?= strtolower($category->name) ?></button> 
    <?php endforeach; */?>
       
    </div>
  
 </div>
 
 
        
        

     


</div>
<?php
  
     // Stop the loop when all posts are displayed
  endwhile; ?>
  
  <?php 
  
  
 // If no posts were found
 else :
 ?>
 <p>Pas encore d'article sur cette page</p>
 

<?php
 endif;
  ?>
<?php
$args = [
    'prev_text'=>'&laquo;',
    'next_text'=>'&raquo;',
    'type'=>'list'
];

  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', paginate_links($args));
  
  ?>
</section>


  
  <?php  
  get_footer(); 
  ?>