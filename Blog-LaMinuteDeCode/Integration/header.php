<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset') ;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri();?>/images/favicon-mdc.png">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <?php wp_head();?>
</head>
<body>
<?php wp_body_open() ;?>