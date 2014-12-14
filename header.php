<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/oldie.css" type="text/css">
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrap">
            <header class="gridly">
                <div class="tier-12" id="brand">
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    <div><?php bloginfo('description'); ?></div>
                </div>
                <nav class="tier-12" id="site-navigation">
                    <?php
                        $defaults = array(
                            'theme_location'  => '',
                            'menu'            => 'primary',
                            'container'       => 'false',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'main-nav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );
                        wp_nav_menu( $defaults );
                    ?>
                </nav>
            </header>