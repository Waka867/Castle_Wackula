<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!-- <title></title> By leaving title tags out, add_theme_support('title-tag') generates doc title in functions.php -->
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	<nav>
	<?php
		$args =	[
			'container'        => 'nav',
			'container_class'  => 'main-nav',
			'theme_location'   => 'main-menu',
			'container_class'  => 'custom-menu-style',
      'depth'            => 0
      //'fallback_cb'     => 'bs4navwalker::fallback',
      //'walker'          => new bs4navwalker()
		];
		wp_nav_menu( $args );
	?>
	</nav>
