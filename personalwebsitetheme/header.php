<!DOCTYPE html>
<html <?php language_attributes(); /*Specify which language to use.*/ ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); /*So that WordPress can add any other code it wants to automatically add for the header. */ ?>
    </head>

<body <?php body_class(); ?>>

    <div class="container">
        <header class="site-header">
            <h1><a href = "<?php echo home_url() ?>">Jesse Huang</a></h1>
            <h3><?php bloginfo('description'); ?></h3>
        </header>