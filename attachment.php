<?php 


get_header(); 

//This is where we utilize a template part to display the site title banner
echo get_template_part('template-parts/site-banner');

?>

<!-- <div class='site-content container'>

	<article id="p" class="row">
		<div class="col-md-12">
			<h1 style="text-align: center; font-size: 3em;">Whoops! It's a 404!</h1>
			<img style="width: 50%; display: block; margin: 5% auto 0 auto;" src="https://media.giphy.com/media/Beyusevd47X7W/giphy.gif">
		</div>
	</article>

	<article id="" class="row" style="text-align: center;">
		<div class="col-md-12">
			<h1>Sorry, the page you are looking for could not be found</h1>
			<?php	//get_search_form(); 	//get_sidebar(); ?>
		</div>
	</article>

</div> -->

<div class='container site-content'>
  <div class='row'>
  <?php

	if( have_posts() ){

		echo '<div id="post-' . get_the_ID() . '" class="col-md-12" style="text-align: center;"';
		echo post_class() . '>';

		while( have_posts() ) {
				the_post();

        $attImage = wp_get_attachment_image( get_the_ID(), 'large', '', ['style' => 'margin-top: 5%;'] );
        echo $attImage;

		}

		echo '</div>'; // Close .col-md-12
    echo '</div>'; // Close .row

    echo the_title( '<h1 style="text-align: center;"><strong>', $after = '</strong></h1>', $echo = true );

	}

	//get_sidebar();

?>
<br><p>attachment.php</p>

</div>

<?php get_footer(); ?>
