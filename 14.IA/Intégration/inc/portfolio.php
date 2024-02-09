            <!-- ##################### -->
    <!--  Portfolio -->
    <!-- ##################### -->

    <section id="portfolio">
        <div class="portfolio-filtre"></div>
        <h2 class="heading"><?php echo the_field('title_section_2');?></h2>
            <div class="portfolio-container">

            <?php
           $args = array(
            'post_type'=>'portfolio',
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        if($query->have_posts()) :
            while($query->have_posts()) : $query-> the_post();
            ;?>
                <div class="portfolio-box">
                <?php if(has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url();?>" >
                    <?php endif;?>
               <div class="portfolio-box-content">
                <h4><?php the_title(); ?></h4>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20) ;?></p>
                <a class="btn" href="<?php the_permalink();?>"><ion-icon name="arrow-forward-outline"></ion-icon></a>
               </div>
            </div>

            <?php
    endwhile;
    wp_reset_postdata();
    else :
        echo "Aucun projets trouvés";
    endif;
        ;?>
          
            </div>
        </div>
    </section>