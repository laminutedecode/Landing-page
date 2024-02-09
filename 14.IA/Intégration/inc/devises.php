    <!-- ##################### -->
    <!--  Devise  -->
    <!-- ##################### -->

    <section id="devises">
        <h2 class="heading"><?php echo the_field('title_section_1');?></h2>
        <div class="devices-content">
            <div class="device-box">
                <ion-icon name="finger-print-outline"></ion-icon>
                <h3> <?php echo the_field('devise_1_title');?></h3>
                <p><?php echo the_field('devises_1_text');?></p>
            </div>
            <div class="device-box">
                <ion-icon name="layers-outline"></ion-icon>
                <h3> <p><?php echo the_field('devise_2_title');?></h3>
                <p><?php echo the_field('devises_2_text');?></p>
            </div>
            <div class="device-box">
                <ion-icon name="options-outline"></ion-icon>
                <h3> <p><?php echo the_field('devise_3_title');?></h3>
                <p><?php echo the_field('devises_3_text');?></p>
            </div>
        </div>
    </section>