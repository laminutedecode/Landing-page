<?php 
/*
Template name: portfolio

*/
get_header() ;?>
<?php include('inc/nav.php');?>



    <section id="home">
        <div class="home-content">
            <h1><?php the_title();?></h1>
            <div class="home-line"></div>
            <p>Projets</p>
        </div>
    </section>




          <!-- #################### -->
    <!-- Posts-->
    <!-- #################### -->

    <section class="posts">
    <?php
    $args = array(
        'post_type'=>'portfolio',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);
    if($query->have_posts()) :
        while($query->have_posts()) : $query-> the_post();

   
    ;?>
        <div class="post-box">
        <?php if(has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="post-img">
            <?php endif;?>
            <h3 class="post-title"><?php the_title();?></h3>
            <p class="post-description"><?php echo wp_trim_words(get_the_excerpt(), 20) ;?></p>
            <a href="<?php the_permalink();?>" class="post-btn"><ion-icon name="arrow-forward-outline"></ion-icon></a>
        </div>
      
        <?php
    endwhile;
    wp_reset_postdata();
    else :
        echo "Aucun article trouvé";
    endif;
        ;?>

    </section>

   <?php get_footer();?>