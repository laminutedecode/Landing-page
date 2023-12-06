<div class="ariane">
    <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> > 
    <?php
      
    $categories = get_the_category();
    if (!empty($categories)) {
        echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . $categories[0]->name . '</a> > ';
    }
    ?>
    <?php the_title(); ?>
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
</div>
