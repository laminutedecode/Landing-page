<?php 
/*  Template name: About*/
get_header() ;?>
<?php include('inc/nav.php');?>

       
    <section class="page-home">
        <div class="page-home-content">
        <?php include('inc/back.php');?>
            <h1><?php the_title();?></h1>
        </div>
    </section>


    <section class="container">
        <div class="heading"><h2><?php echo the_field('about_title_1');?></h2></div>
        <div class="container-content">
           <?php if(have_posts()) : while(have_posts()) : the_post();?>
           <?php the_content();?>
        </div>
        <div class="heading"><h2><?php echo the_field('about_title_2');?></h2></div>

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
            <div class="team-box">
            <img src="<?php the_post_thumbnail_url('team'); ?>" alt="">
                <h3 class="team-name"><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>


    </section>
    <?php
    endwhile;
    endif
    ;?>
   
    <?php get_footer();?>