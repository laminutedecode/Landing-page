     <!-- ##################### -->
    <!-- Team -->
    <!-- ##################### -->

    <section id="team">
        <h2 class="heading"><?php echo the_field('title_section_4');?></h2>

        <div class="team-container">
        <?php 
$args = array(
'post_type' => 'team',
'orderby' => 'menu_order',
'order' => 'ASC'

);
$q = new WP_Query( $args );
if ( $q->have_posts() ) : 
while ( $q->have_posts() ) : $q->the_post(); ?>
            <div class="team-box" >
                    <img src="<?php the_post_thumbnail_url('team'); ?>" alt="">
                  <div class="team-box-content">
                    <h1><?php the_title(); ?></h1>
                    <ul class="team-box-social">
                            <li><a href="<?php echo the_field('team_link_fb');?>"><ion-icon name="logo-facebook"></ion-icon></a></li>
                            <li><a href="<?php echo the_field('team_link_lk');?>"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                            <li><a href="<?php echo the_field('team_link_ig');?>"><ion-icon name="logo-instagram"></ion-icon></a></li>
                            <li><a href="<?php echo the_field('team_link_git');?>"><ion-icon name="logo-github"></ion-icon></a></li>
                    </ul>
                  </div>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>


              </div>
          </div>
    </section>