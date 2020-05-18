<?php

/*
Template Name: Contact page
*/

?>

<?php
get_header('blog');
?>

<section class="hire_page">

<section id="hire">
             <form>
            <h1>Ecrivez-moi !</h1>

            <?php
                  $contact_page_query = new WP_QUERY(
                     [
                        'post_type' => 'page',
                        'pagename'  => 'contactez-moi',
                        'posts_per_page' => 1
                     ]
                     );
               if ( $contact_page_query ->have_posts()) : 
                    $contact_page_query->the_post();
                    
                    the_content();
                    wp_reset_postdata();
               endif;
               ?>
           <!--
                <div class="field name-box">
                    <input type="text" id="name" placeholder="Qui êtes- vous"/>
                    <label for="name">nom</label>
                    <span class="ss-icon">check</span>
                </div>
        
                <div class="field email-box">
                    <input type="text" id="email" placeholder="nom@email.com"/>
                    <label for="email">email</label>
                    <span class="ss-icon">check</span>
                </div>
        
                <div class="field msg-box">
                    <textarea id="msg" rows="4" placeholder="Ecrivez votre message"></textarea>
                    <label for="msg">message</label>
                    <span class="ss-icon">check</span>
                </div>
        
                <input class="button" type="submit" value="Envoyer" />-->
          </form>

        </section>
    
    </section>

        <?php  
  get_footer(); 
  ?>
