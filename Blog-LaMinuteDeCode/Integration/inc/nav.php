    <!-- #################### -->
    <!-- Navigation -->
    <!-- #################### -->
    <nav class="navigation-principale">
        <a href="<?php echo home_url('/');?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt=""></a>
        <?php wp_nav_menu(array(
            'theme_location' => 'menu',
            'items_wrap' => '<ul class="menu">%3$s</ul>'
        ));?>
        <div class="icones-navigation">
            <div id="btn-search"><ion-icon name="search-outline"></ion-icon></div>
            <div id="btn-burger"><ion-icon name="menu-outline"></ion-icon></div>
        </div>
        <form action="<?php echo home_url('/');?>" autocomplete="on" class="search">
            <input id="s" name="s" type="search" placeholder="Que recherchez vous ?">
        </form>
    </nav>