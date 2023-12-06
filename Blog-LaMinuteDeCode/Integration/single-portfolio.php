<?php get_header() ;?>
<?php include('inc/nav.php');?>



    <?php if(have_posts()) :
    while (have_posts()) : the_post();
    ;?>
    <section class="single-home">
        <div class="single-home-content">
            <?php include('inc/back.php');?>
            <h1><?php the_title();?></h1>
            <?php if(has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
            <?php endif ;?>
        </div>
    </section>

        <!-- #################### -->
    <!--  Single content -->
    <!-- #################### -->

    <section class="single-content">
     <?php include('inc/ariane.php');?>
       <?php the_content();?>
   


    </section>
    <?php
    endwhile;
    endif
    ;?>

<?php get_footer();?>