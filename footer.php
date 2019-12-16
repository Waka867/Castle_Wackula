<footer class='practice-footer-style'>

<?php
	$args =	[
		'menu' 			=> 'footer-menu',
		'container' 		=> 'nav',
		'container_class' 	=> 'footer-nav',
		'theme_location' 	=> 'footer-menu',
		'container_class' 	=> 'custom-menu-style',
		'depth'						=> 1
		//'fallback_cb'     => 'bs4navwalker::fallback',
		//'walker'          => new bs4navwalker()
	];

	wp_nav_menu( $args );
?>

</footer>


<?php
	wp_footer();
?>

</body>
</html>
