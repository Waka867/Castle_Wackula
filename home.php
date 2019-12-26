<?php

/*
*
*
* Home.php is the primary file for the site blog/posts page
*
*
*/

get_header();

//This is where we utilize a template part to display the site title banner
echo get_template_part('template-parts/site-banner');


function wackula_display_title() {
	// Displays Post title with link to post
	$post_link = get_permalink();
	the_title( "<a style='text-decoration: none;' href='$post_link'><h1>", '</h1></a>' );
}

function wackula_display_edit_and_full_link(){
	// echo "<section>";
	echo "<div class='blog-post-links'>";
	echo the_content( 'View Full Article' );

	if ( current_user_can( 'edit_posts' ) ) {
		echo edit_post_link( 'Edit Post', ' | ' );
	}
	// echo "</section>";
	echo "</div>";
}

?>


<div class='container site-content'>
<?php

	if( have_posts() ){

		if( !is_active_sidebar( 'main-sidebar' ) ){


			echo '<div class="row">';
			echo '<div class="col-md-12">';
			echo '<article class="blog-page-styling" id="primary post-' . get_the_ID() . '"';
			echo post_class() . '>';

			while( have_posts() ) {
				the_post();

				// Displays Post title with link to post
				wackula_display_title();

				// Adds feature image/post thumbnail if present
				if( has_post_thumbnail() ){
					// echo "<div class='blog-img'>";
					the_post_thumbnail( 'medium');
					// echo "</div>";
				}

				// Show edit this and view article links
				wackula_display_edit_and_full_link();

			}



			echo '</article></div></div>';

		} else {
			echo '<div class="row">';
			echo '<div class="col-md-10">';
			echo '<article id="primary post-' . get_the_ID() . '"';
			echo post_class() . '>';

			while( have_posts() ) {
				the_post();

				// Displays Post title with link to post
				wackula_display_title();

				// Adds feature image/post thumbnail if present
				if( has_post_thumbnail() ){
					// echo "<div class='blog-img'>";
					the_post_thumbnail( 'medium');
					// echo "</div>";
				}

				// Show edit this and view article links
				wackula_display_edit_and_full_link();

				//Edit link
				echo edit_post_link();
			}

		echo '</article></div>';
		echo'<div class="col-md-2">';
		get_sidebar();
		echo "</div>";
		echo '</div>';


		}

	} else {
?>
		<!--Add what happens if no posts found-->
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php
	}


	// get_sidebar();

?>
	<br><br><p>home.php</p>

</div>



<?php get_footer(); ?>
