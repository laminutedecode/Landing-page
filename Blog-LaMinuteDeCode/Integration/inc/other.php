<div class="other-single">
            <h4>Autres articles</h4>
            <ul class="other-single-container">
                <?php
                $args = array(
                    'post_type'=> 'post',
                    'posts_per_page'=> 4,
                    'order' => 'DESC',
                    'orderby' => 'date'
                );
                $query = new WP_Query($args);
                if($query->have_posts()) : while($query->have_posts()) : $query->the_post();

                ;?>
                <li class="other-single-box">
                    <?php  if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('thumbnail');?>
                        <?php else : ?>
                    <img src="<?php echo get_template_directory_uri().'/images/default-thumbnail.jpg';?>" alt="">
                    <?php endif;?>
                    <div class="other-box-content">
                        <h6><?php the_title();?></h6>
                        <a href="<?php the_permalink();?>">Voir article</a>
                    </div>
                </li>
                <?php endwhile; endif; wp_reset_postdata() ;?>
            </ul>
        </div>