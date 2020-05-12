<?php
get_header('nav');
?>

<?php // checks if there are any posts that match the query
 if (have_posts()) :
  ?>
<section class="blog_home">

<div class="categories">
  <ul>
  <li><a href="http://localhost/projetspersos/Reveil-theme/blog/"><i class="fa fa-tag" aria-hidden="true"></i>tous les articles</a></li>
    <?php wp_list_categories('title_li='); ?>
  </ul>
</div>

<div class="authors">
  <ul>
    <li><a href="http://localhost/projetspersos/Reveil-theme/blog/"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>tous les auteurs</a></li>
    <?php wp_list_authors('title_li='); ?>
  </ul>
</div>


  <?php
   // If there are posts matching the query then start the loop
   while ( have_posts() ) : the_post();
  
     // the code between the while loop will be repeated for each post
     ?>
  

<div class="blog--single">

     <section class="blog_header">   
        
        <div class="blog_header_content">
          <h2 class="blog--single_link_title"><?php the_title(); ?></h2>

              <div class="blog_btn">
                <?php
                if (get_post_type() != 'page'):
                $categories = get_the_category(); ?>
                <?php
                    foreach ($categories as $category) : ?>
                    <a href="<?= get_category_link($category->term_id); ?>"  class="btn-<?= strtolower($category->name) ?>"><i class="fa fa-tag"></i><?= $category->name ?></a> 
                    <?php endforeach; ?>
                  <?php endif;?>
                </div>

                <h3 class="blog--single_editor">Le <span><?php the_date(); ?></span> par <span><?php the_author(); ?></span></h3>
        </div>

                <a href="<?php the_permalink() ?>">
              <?php if ( has_post_thumbnail() ) { ?>
                  <img class="blog--single_img" src="<?= get_the_post_thumbnail_url(); ?>">
              <?php }  else { ?>
                <img class="blog--single_img" src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/default-images.jpg" alt="<?php the_title(); ?>" />
                <?php } ?>
              </a>
    
    </section>
     


     <section class="single_block_content">
        
        <p class="blog--single_content"><?php the_content() ?></p>
     </section>

     
  
  
 </div>


<div class="site__navigation">
	<div class="site__navigation__prev">
		<?php previous_post_link( 'Article Précédent<br>%link' ); ?>
</div>
    <div class="site__navigation__next">
        <?php next_post_link( 'Article Suivant<br>%link' ); ?> 
    </div>
</div>


<?php
     // Stop the loop when all posts are displayed
  endwhile;
  
 // If no posts were found
 else :
 ?>
  <p>Les articles sont en cours de parution, revenez prochainement</p>

</section>

<?php
 endif;
 ?>


  <?php  get_footer(); 
  ?>