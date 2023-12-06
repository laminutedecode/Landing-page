<?php 
get_header() ;?>
<?php include('inc/nav.php');?>

       
    <section class="page-home">
        <div class="page-home-content">
        <?php include('inc/back.php');?>
            <h1><?php the_title();?></h1>
        </div>
    </section>


    <section class="container">
        <div class="container-content">
           <?php if(have_posts()) : while(have_posts()) : the_post();?>
           <?php the_content();?>
        </div>
       

    </section>
    <?php
    endwhile;
    endif
    ;?>
   
    <?php get_footer();?>