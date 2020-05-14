<?php


get_header();
?>

  <main  class="main">

    <div class="scrolltop">
          <div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div>
        </div>
        
        <?php

        $way_pages_query=new WP_QUERY(
   [
      'post_type'=> 'page',
      'post_parent'=> 18,
      'orderby' => 'menu_order',
      'order'=> 'ASC',
      'posts_per_page'=> -1
   ]
   );
   

   if ($way_pages_query->have_posts()) :
   
   ?>   
        
        <section class="mainintro">

        
   
   <?php

         while ($way_pages_query->have_posts()) :
         $way_pages_query->the_post();
         ?>

        <div class="mainintro_content">

        
          <h3><?php the_title(); ?></h3>

          <p><?php the_content(); ?></p>

          <!--<p>Je propose des séances d'Hypnose, de Relaxation et d'Access Bars®.

            J'accompagne des particuliers (enfants, adolescents, adultes, personnes âgées) en séance individuelle ou collective à mon cabinet ou à domicile.</p>

            <p>Je vous reçois avec bienveillance pour trouver ensemble des solutions en vous apportant des outils adaptés à chaque situation. </p>
          -->
            <li>S'épanouir harmonieusement</li>

            <li>Reprendre confiance en soi</li>
              
            <li>Trouver un équilibre</li>
              
            <li> Détente et bien-être</li>
              
            <li> Gestion des émotions</li>


        </div>

        <?php
            endwhile;
          ?>

        </section> 

        <?php
            endif;
            ?>

        <?php

        $panorama_pages_query=new WP_QUERY(
        [
        'post_type'=> 'page',
        'post_parent'=> 50,
        'orderby' => 'menu_order',
        'order'=> 'ASC',
        'posts_per_page'=> -1
        ]
        );


        if ($panorama_pages_query->have_posts()) :

        ?>   
        
        <div class="interlude">

        <?php

          while ($panorama_pages_query->have_posts()) :
          $panorama_pages_query->the_post();
          ?>

            <img src="<?= get_the_post_thumbnail_url(); ?>">
          </div>

          <?php
            endwhile;
          ?>

        <?php
            endif;
          ?>




          <?php

$hypnose_pages_query=new WP_QUERY(
[
'post_type'=> 'page',
'post_parent'=> 20,
'orderby' => 'menu_order',
'order'=> 'ASC',
'posts_per_page'=> -1
]
);


if ($hypnose_pages_query->have_posts()) :

?>   

      <section id="hypnose" class="sec2">

      <?php

         while ($hypnose_pages_query->have_posts()) :
         $hypnose_pages_query->the_post();
         ?>

        <div class="sec2_content">
        <h3><?php the_title(); ?></h3>

        <p><?php the_content(); ?></p>
          <!--
        <p>"Pendant que l'on chercher à comprendre, le temps passe et la vie avec lui" Henri Laborit
          "Prend soins de ton cerveau et ton cerveau prendra soin de ton existence" Alfonso Caycedo</p>
        
        <p>L'hypnose est une technique de relaxation.</p>

        <p>L'hypnose est un état modifié de conscience (plus ou moins selon le receveur). Selon le Dr Mario Beauregard, l'état modifié de conscience désigne : « tout état mental différent de l'état d'éveil habituel ; c'est-à-dire, représentant une déviation dans l'expérience subjective ou dans le fonctionnement psychologique par rapport à certaines normes générales de la conscience à l'état de veille »</p>

        <p>L'hypnose est basée sur la confiance et la bienveillance lors de l'accompagnement. Durant une séance, vous entendez tout ce qui vous entoure et vous restez maître de vous-même. Les limites de l'hypnose sont liées à la motivation de chacun.</p>

        <p>Arrêt du tabac, aide à l'amaigrissement, anxiété, gestion de stress, gestion de la douleur, troubles du sommeil, concentration, confiance en soi, difficultés relationnelles (couple, séparation), deuil, phobie, préparation mentale (examens, compétitions sportifs), l'accompagnement de la femme enceinte, problème de peau (eczéma, psoriasis), énurésie...</p>
        -->
        <?php
            endwhile;
          ?>

        
        </div>

        <?php
            endif;
          ?>


        <div class="torrent_img">
            <img src="<?= get_the_post_thumbnail_url(); ?>">
        </div>
      </section>


      <?php

$relax_pages_query=new WP_QUERY(
[
'post_type'=> 'page',
'post_parent'=> 21,
'orderby' => 'menu_order',
'order'=> 'ASC',
'posts_per_page'=> -1
]
);


if ($relax_pages_query->have_posts()) :

?>   
      

      <section id="relaxation" class="sec4">
      <?php

         while ($relax_pages_query->have_posts()) :
         $relax_pages_query->the_post();
         ?>

        <div class="sec4_img">
            <img src="<?= get_the_post_thumbnail_url(); ?>">
          </div>

        <div class="sec4_content">
          <h3><?php the_title(); ?></h3>

          <p><?php the_content(); ?></p>

          <!--
  
          <p>"Il suffit d'un sourire pour que l'âme entre dans le palais des rêves."Savoir, Penser, Rêver, tout est là" Victor Hugo</p>
          
          <p>La relaxation participe à l'équilibre et le bien-être de chacun.</p>
  
          <p>Je vous propose de découvrir des techniques de relaxation qui sont des véritables outils afin de vous apporter un mieux-être. Voici quelques exemple :

            Méditation, Yoga du rire, Yoga Nidra, Shiatsu, Bio Energie. </p>
  
          <p>La relaxation est un temps pour soi, pour se détendre, pour prendre soin de soi.

            Elle permet de trouver un équilibre, prendre recul, s'apaiser, s'épanouir, gérer ses émotions, développer son autonomie...</p>
          -->
            <?php
            endwhile;
          ?>
          </div>

          <?php
            endif;
          ?>

          <div class="sec4mobile_img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/torrentter.jpg" alt="torrent">
          </div>
          
          
      </section>

      <?php

      $gandhibanner_pages_query=new WP_QUERY(
      [
      'post_type'=> 'page',
      'post_parent'=> 46,
      'orderby' => 'menu_order',
      'order'=> 'ASC',
      'posts_per_page'=> -1
      ]
      );


      if ($gandhibanner_pages_query->have_posts()) :

      ?>   

         <section class="sec3">

         <?php

         while ($gandhibanner_pages_query->have_posts()) :
         $gandhibanner_pages_query->the_post();
         ?>

        <div class="sec3_content">

          <p><?php the_content(); ?></p>
          <p><?php the_title(); ?></p>
        </div>

        <?php
            endwhile;
          ?>
          
        </section>

        <?php
            endif;
          ?>
      
        <?php

      $access_pages_query=new WP_QUERY(
      [
      'post_type'=> 'page',
      'post_parent'=> 22,
      'orderby' => 'menu_order',
      'order'=> 'ASC',
      'posts_per_page'=> -1
      ]
      );


      if ($access_pages_query->have_posts()) :

      ?>   
    
      <section id="accessbar" class="sec2">

      <?php

         while ($access_pages_query->have_posts()) :
         $access_pages_query->the_post();
         ?>


        <div class="sec2_content">
        <h3><?php the_title(); ?></h3>

        <p><?php the_content(); ?></p>

        <!--
        <p>Une technique énergétique de libération des mémoires cellulaires.</p>

        <p>Par appositions des mains sur 32 points, bien précis de votre tête, afin d'activer des bars énergétiques.</p>

        <p>Celles-ci vont d'abord nettoyer, tous les blocages créés en vous, par des peurs, du stress, des angoisses etc...</p>

        <p>Ensuite elles vont venir reprogrammer vos cellules énergétiques, là où vous en avez besoin.</p>

        <p>Après une séance vous vous sentirez libre et ressourcé.</p>
        -->
        </div>

        <?php
            endwhile;
          ?>

        <div class="accessbars">
          <img src="<?= get_the_post_thumbnail_url(); ?>">
        </div> 

        

      </section>

          <?php
            endif;
          ?>

        <?php

        $douglasbanner_pages_query=new WP_QUERY(
        [
        'post_type'=> 'page',
        'post_parent'=> 48,
        'orderby' => 'menu_order',
        'order'=> 'ASC',
        'posts_per_page'=> -1
        ]
        );


        if ($douglasbanner_pages_query->have_posts()) :

        ?>   

      <section class="sec3">

      <?php

      while ($douglasbanner_pages_query->have_posts()) :
      $douglasbanner_pages_query->the_post();
      ?>

        <img src="<?= get_the_post_thumbnail_url(); ?>">

        <div class="sec3_content">

          <p><?php the_content(); ?></p>
          <p><?php the_title(); ?></p>

        </div>

        <?php
            endwhile;
          ?>

        </section>

        <?php
            endif;
          ?>

        <?php

      $progress_pages_query=new WP_QUERY(
      [
      'post_type'=> 'page',
      'post_parent'=> 23,
      'orderby' => 'menu_order',
      'order'=> 'ASC',
      'posts_per_page'=> -1
      ]
      );


      if ($progress_pages_query->have_posts()) :

      ?>   

      <section id="deroulement" class="sec4">

      <?php

      while ($progress_pages_query->have_posts()) :
      $progress_pages_query->the_post();
      ?>


        <div class="sec4_img">
          <img src="<?= get_the_post_thumbnail_url(); ?>">
        </div>

          <div class="sec4_content">
            <h3><?php the_title(); ?></h3>

            <p><?php the_content(); ?></p>

          <!--
            <p>Séance individuelle : la première étape est l'échange avant chaque séance pour la mise en place d'un accompagnement spécifique et instaurer une relation de confiance. Pour finir le retour sur le vécu de la séance, connaître le ressenti.</p>
            
            <p>Séance Collectif : pour le bien-être et la détente, pour terminer le retour du vécu de la séance si besoin.</p>
    
            <p>En aucun cas mon accompagnement ne remplace un traitement médical.</p>
          -->
            </div>

            <?php
            endwhile;
          ?>

        
        </section>

        <?php
            endif;
          ?>

      
        <?php

        $cost_pages_query=new WP_QUERY(
        [
        'post_type'=> 'page',
        'post_parent'=> 24,
        'orderby' => 'menu_order',
        'order'=> 'ASC',
        'posts_per_page'=> -1
        ]
        );


        if ($cost_pages_query->have_posts()) :

        ?>   

      <section id="tarifs" class="sec2">

      <?php

      while ($cost_pages_query->have_posts()) :
      $cost_pages_query->the_post();
      ?>

        <div class="sec2_content">
        
          
          <h3><?php the_title(); ?></h3>

          <p><?php the_content(); ?></p>

          
          <!--
          <p>Les tarifs dépendent du consultant (enfant, étudiant, adulte) et du type de séance (individuelle ou groupe).</p>
  
          <p>Les séances individuelles sont établies en fonction des besoins de chacun, une séance peut englober plusieurs techniques de relaxation peuvent avoir une durée variable.</p>
  
          <p>Certaines mutuelles ou comités d’entreprises prennent en charge une partie ou la totalité de votre séance.</p>
  
          <p>Renseignez-vous auprès des vôtres.

            (Une facture peut vous être délivrée)</p>
          -->
          <p><span>Moyens de paiements acceptés :</span>
          <li>Espèces</li>
          <li>Chèques</li></p>
          
        </div>

           <div class="sec2_img">
            <img src="<?= get_the_post_thumbnail_url(); ?>">
          </div> 
      
      <?php
            endwhile;
          ?>
         
          <?php
            endif;
          ?>

      <?php

      $costindividual_pages_query=new WP_QUERY(
      [
      'post_type'=> 'page',
      'post_parent'=> 53,
      'orderby' => 'menu_order',
      'order'=> 'ASC',
      'posts_per_page'=> -1
      ]
      );


      if ($costindividual_pages_query->have_posts()) :

      ?>   
        <section class="payment_block">

          <div class="collective_payment"><a href="http://localhost/projetspersos/Reveil-theme/boutique/" class="payment_link">

          <?php

      while ($costindividual_pages_query->have_posts()) :
      $costindividual_pages_query->the_post();
      ?>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>

            <!--
            <p>Adultes : 50 €</p>
            <p>Etudiants (de 16 à 25 ans) : 45 €</p>
            <p>Enfants (de 8 à 15 ans) : 40 €</p>
            -->
          </a></div>

          <?php
            endwhile;
          ?>

          <?php
            endif;
          ?>


        <?php

        $costgroup_pages_query=new WP_QUERY(
        [
        'post_type'=> 'page',
        'post_parent'=> 54,
        'orderby' => 'menu_order',
        'order'=> 'ASC',
        'posts_per_page'=> -1
        ]
        );


        if ($costgroup_pages_query->have_posts()) :

        ?>   
          <div class="collective_payment"><a href="http://localhost/projetspersos/Reveil-theme/boutique/" class="payment_link">
          <?php

      while ($costgroup_pages_query->have_posts()) :
      $costgroup_pages_query->the_post();
      ?>

            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <!--
            <p>Relaxation collective :12 €</p>
            <p>10 séances : 100 €</p>
            -->
            <a href="<?php echo esc_url( get_page_link( 122 ) ); ?>" class="booking_link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/calendar.png" class="calendar"  alt="calendar"/>Réservez votre séance</a>

      </a></div>

          <?php
            endwhile;
          ?>

          <?php
            endif;
          ?>

        <?php

        $costaccessbar_pages_query=new WP_QUERY(
        [
        'post_type'=> 'page',
        'post_parent'=> 55,
        'orderby' => 'menu_order',
        'order'=> 'ASC',
        'posts_per_page'=> -1
        ]
        );


        if ($costaccessbar_pages_query->have_posts()) :

        ?>   

          <div class="collective_payment"><a href="http://localhost/projetspersos/Reveil-theme/boutique/" class="payment_link">

          <?php

      while ($costaccessbar_pages_query->have_posts()) :
      $costaccessbar_pages_query->the_post();
      ?>

            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
      </a></div>

      


          <?php
            endwhile;
          ?>

          <?php
            endif;
          ?> 
          
          
          
         
          <?php

          $engagement_pages_query=new WP_QUERY(
          [
          'post_type'=> 'page',
          'post_parent'=> 60,
          'orderby' => 'menu_order',
          'order'=> 'ASC',
          'posts_per_page'=> -1
          ]
          );


          if ($engagement_pages_query->have_posts()) :

          ?>   
        <section class="engagement_block">
              <?php

              while ($engagement_pages_query->have_posts()) :
              $engagement_pages_query->the_post();
              ?>

          <section class="engagement_content">
              <p><?php the_content(); ?></p>
          </section>
                <?php
                  endwhile;
                ?>
      </div>           
        </section>
                

                      <?php
                          endif;
                        ?>

    </section>
      </section>

      <?php

      $profile_pages_query=new WP_QUERY(
      [
      'post_type'=> 'page',
      'post_parent'=> 25,
      'orderby' => 'menu_order',
      'order'=> 'ASC',
      'posts_per_page'=> -1
      ]
      );


      if ($profile_pages_query->have_posts()) :

      ?>   

      <section id="apropos" class="sec4bis">

      <?php

        while ($profile_pages_query->have_posts()) :
        $profile_pages_query->the_post();
        ?>

        <div class="sec4bis_content">
          <h3><?php the_title(); ?></h3>
          
          <p><?php the_content(); ?></p>
          <!--
          <p>Praticien AccessBar® depuis mars 2019</p>
          
          <p>Formée à l'Institut de Formation aux Techniques de Relaxation et de Psycho Somatosynthèse® (http://www.psyrelax.org/) durant 2017/2018 :</p>
  
          <p>Relaxologue Praticien Maître Praticien en Psycho Somatosynthèse 1er degré</p>

          <p>Animateur en Technique de Relaxation.</p>

          <p>Hypnologue Praticien 2ème degré.</p>
          -->
         </div>
          
          <div class="profil_cam">
            <img src="<?= get_the_post_thumbnail_url(); ?>">
          </div> 
        
        

          <?php
            endwhile;
          ?>
          
      </section>

          <?php
            endif;
          ?>

          

      
      <?php

      $contact_pages_query=new WP_QUERY(
      [
      'post_type'=> 'page',
      'post_parent'=> 26,
      'orderby' => 'menu_order',
      'order'=> 'ASC',
      'posts_per_page'=> -1
      ]
      );


      if ($contact_pages_query->have_posts()) :

      ?>   

      <section id="contact" class="sec5">

      <?php

        while ($contact_pages_query->have_posts()) :
        $contact_pages_query->the_post();
        ?>

        <div class="sec5_content">
          <div class="plane_icon">
          <i class="fa fa-paper-plane" aria-hidden="true"></i>
        </div>
          <h3><?php the_title(); ?></h3>
  
          <p class="contact_information"><?php the_content(); ?></p>

          

  <div class="contact_ressources">

            <div class="contact_card">
              <img src="<?= get_the_post_thumbnail_url(); ?>">
            </div>

          
          <p class="mail"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:stepha.retailleau@gmail.com">stepha.retailleau@gmail.com</a></p>  

        </div>

          <?php
            endwhile;
          ?>

          <?php
            endif;
          ?> 
          
          <?php

          $coordonates_pages_query=new WP_QUERY(
          [
          'post_type'=> 'page',
          'post_parent'=> 62,
          'orderby' => 'menu_order',
          'order'=> 'ASC',
          'posts_per_page'=> -1
          ]
          );


          if ($coordonates_pages_query->have_posts()) :

          ?>   

          <div class="coordonates">

             <?php

              while ($coordonates_pages_query->have_posts()) :
              $coordonates_pages_query->the_post();
            ?>

          <div class="adress">

          

            <h4 class="adress_content"><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_title(); ?></h4>



          </div>

          <p><?php the_content(); ?></p>
          <!--
          <p>18 RUE DU CMDT COUSTEAU</p>
  
          <p>85130 LES LANDES-GENUSSON</p>-->

          <?php
            endwhile;
          ?>
          
          
          </div>

          <?php
            endif;
          ?>
        
        <?php

          $feeling_pages_query=new WP_QUERY(
          [
          'post_type'=> 'page',
          'post_parent'=> 63,
          'orderby' => 'menu_order',
          'order'=> 'ASC',
          'posts_per_page'=> -1
          ]
          );


          if ($feeling_pages_query->have_posts()) :

          ?>   
          <div class="emotion_content">

          <?php

            while ($feeling_pages_query->have_posts()) :
            $feeling_pages_query->the_post();
          ?>
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="relaxation">
            <p class="emotion"><?php the_content(); ?></p>
          </div>
          
          <?php
            endwhile;
          ?>

          <?php
            endif;
          ?>

          </div>

          <section id="hire">
             <form>
            <h1>Ecrivez-moi !</h1>

            <?php
                  $contact_page_query = new WP_QUERY(
                     [
                        'post_type' => 'page',
                        'pagename'  => 'form',
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

  </main>
 
  <?php  

get_footer();