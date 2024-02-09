    <!-- ##################### -->
    <!--  Home  -->
    <!-- ##################### -->
<section id="home">
        <div class="home-video"><video src="<?php echo get_template_directory_uri(); ?>/img/video-bg.mp4" autoplay muted loop></video></div>
        <div class="home-filter"></div>
        <div class="home-content">
            <p><?php echo the_field('sub_title');?></p>
            <h1><?php echo the_field('title');?></h1>
            <a href="#devises" class="home-icon"><ion-icon name="chevron-down-outline"></ion-icon></a><
        </div>
    </section>
