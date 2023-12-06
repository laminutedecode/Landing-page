     <!-- ##################### -->
    <!--  À propos  -->
    <!-- ##################### -->

    <section id="apropos">
        <h2 class="heading"><?php echo the_field('title_section_3');?></h2>
        <div class="about-container">
            <div class="about-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/apropos.svg" alt="">
            </div>
            <div class="about-content">
              <span><?php echo the_field('about_subtitle');?></span>
              <p><?php echo the_field('about_content');?></p>
              <a target="_blank" href="<?php echo the_field('about_link');?>" class="btn">En savoir plus</a>
            </div>
    
          </div>
    </section>