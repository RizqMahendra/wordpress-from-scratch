<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo("charset");?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('name'); ?></title>
</head>
<body>
    <?php wp_head(); ?>
<header>
    <nav class="navbar navbar-expand-md navbar" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php bloginfo('url');?>">
    <?php if (get_theme_support('the_custom_logo')) :?>
        <?php echo(the_custom_logo()) ?>
    <?php else: ?>
            <div>
                <h2 class='site-title'><?php bloginfo('name'); ?></h2>
            </div>
            <?php endif; ?>
    </a>
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'top-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>
    </div>
</nav>
</header>