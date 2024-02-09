                <!-- ##################### -->
    <!-- Contact -->
    <!-- ##################### -->

    <section class="contact" id="contact">

        <h2 class="heading"><?php echo the_field('title_section_5');?></h2>
          <div class="contact-container">
  
            <div class="contact-infos">
              <h3><?php echo the_field('contact_subtitle');?></h3>
              <p><?php echo the_field('contact_content');?></p>
              <div class="adress">
               <div>
                <ion-icon name="home-outline"></ion-icon><span><?php echo the_field('contact_adress');?></span></i>
               </div>
              <div>
                <ion-icon name="call-outline"></ion-icon><span><?php echo the_field('contact_tel');?></span></i>
              </div>
                <div>
                    <ion-icon name="mail-outline"></ion-icon><span><?php echo the_field('contact_email');?></span></i>
                </div>
              </div>
              <div class="social">
               <a href="<?php echo the_field('contact_fb');?>"> <ion-icon name="logo-facebook"></ion-icon></a>
                <a href="<?php echo the_field('contact_tw');?>"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="<?php echo the_field('contact_ig');?>"><ion-icon name="logo-instagram"></ion-icon></i></a>
                <a href="<?php echo the_field('contact_yt');?>"><ion-icon name="logo-youtube"></ion-icon></a>
              </div>
  
            </div>
  
            <div class="contact-form">
            <?= do_shortcode('[contact-form-7 id="6222699" title="Contact form 1"]');?>
            </div>
  
  
          </div>
  
      </section>