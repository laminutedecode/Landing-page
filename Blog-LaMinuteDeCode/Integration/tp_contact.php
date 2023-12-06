<?php 
/*  Template name: Contact*/
get_header() ;?>
<?php include('inc/nav.php');?>

       
    <section class="page-home">
        <div class="page-home-content">
        <?php include('inc/back.php');?>
            <h1><?php the_title();?></h1>
        </div>
    </section>


    <section class="container">
        <div class="heading"><h2>Nous <span>Contacter</span></h2></div>
        <div class="container-content">
            <?php echo do_shortcode('[contact-form-7 id="8571d21" title="Contact form 1"]');?>
        </div>
    
    </section>

   
    <?php get_footer();?>