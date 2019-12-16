<?php
if( ! is_active_sidebar( 'main-sidebar' ) ) {
  return;
}
?>

<!-- <aside id="secondary" class="widget-area" role="complementary"> -->
<!-- <div id="secondary" class="widget-area" role="complementary"> -->
<div id="" class="widget-area">

  <?php
	/*$args = [
		'type'  => 'weekly',
		'limit' => 10,
		'show_post_count' => true,
		'order' => 'ASC'
	];

	wp_get_archives( $args );*/

    	dynamic_sidebar( 'main-sidebar' );
  ?>

<!-- </aside> -->
</div>
