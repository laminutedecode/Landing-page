<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ;?>
</head>

<body >

    <!-- ##################### -->
    <!--  Navigation  -->
    <!-- ##################### -->
    <nav>
        <a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""></a>
        <ul class="menu">
            <li>
                <a href="#home" class="active">Home</a>
            </li>
            <li>
                <a href="#devises">Devise</a>
            </li>
            <li>
                <a href="#portfolio">Portfolio</a>
            </li>
            <li>
                <a href="#apropos">À propos</a>
            </li>
            <li>
                <a href="#team">Team</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
        <div id="burger-menu"><ion-icon name="menu-outline"></ion-icon></div>
    </nav>