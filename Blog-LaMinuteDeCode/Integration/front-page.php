<?php get_header() ;?>
<?php include('inc/nav.php');?>

    <!-- #################### -->
    <!-- Home -->
    <!-- #################### -->

    <section id="home">
        <div class="home-content">
            <h1><?php echo the_field('home_title');?></h1>
            <div class="home-line"></div>
            <p><?php echo the_field('home_subtitle');?></p>
        </div>
    </section>

    <div class="heading"><h2><?php echo the_field('home_title_section');?></div>

      <!-- #################### -->
    <!-- Filtre -->
    <!-- #################### -->

    <div class="post-filter">
        <span class="filter-item filter-active" data-filter="all">Tous</span>
        <span class="filter-item" data-filter="tech">Tech</span>
        <span class="filter-item" data-filter="webdesign">Webdesign</span>
        <span class="filter-item" data-filter="graphisme">Graphisme</span>
    </div>

          <!-- #################### -->
    <!-- Posts-->
    <!-- #################### -->

    <section class="posts">
    <?php
    $args = array(
        'post_type'=>'post',
        'posts_per_page' => -1
    );
    $query = new WP_Query($args);
    if($query->have_posts()) :
        while($query->have_posts()) : $query-> the_post();

        $categories = get_the_category();
        $category_class = '';
        if($categories){
            $category_class = $categories[0]->slug;
        }
    ;?>
        <!-- box 1 -->
        <div class="post-box <?php echo $categories[0]->slug ;?>">
        <?php if(has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="post-img">
            <?php endif;?>
            <span class="category"><?php echo $categories[0]->name ;?></span>
            <h3 class="post-title"><?php the_title();?></h3>
            <span class="post-date"><?php echo get_the_date('d/m/Y');?></span>
            <p class="post-description"><?php echo wp_trim_words(get_the_excerpt(), 20) ;?></p>
            <div class="profil-author">
                <div class="profil-img">
                    <?php echo get_avatar(get_the_author_meta('user_email'), '32');?>
                </div>
                <span class="profil-name"><?php the_author();?></span>
            </div>
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