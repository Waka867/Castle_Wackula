<?php


get_header();

//This is where we utilize a template part to display the site title banner
echo get_template_part('template-parts/site-banner');

?>


<div class="container site-content">
  <div class="row">
    <div class="col-md-12">
      <?php

  	if( have_posts() ){

  		//Shows byline
  		byline_display();

  		echo '<article id="post-' . get_the_ID() . '" class="col-md-12" style="text-align: center;"';
  		echo post_class() . '>';

  		while( have_posts() ) {
  				the_post();

          // Adds feature image/post thumbnail if present
          if( has_post_thumbnail() ){
            the_post_thumbnail( 'full', ['title' => get_the_title()] );
          }

  				echo '<a href="';
  				the_permalink();
  				echo '">';
  				echo '<h2><strong>';
  				the_title();
  				echo '</strong></h2></a>';

  				the_content();

  		}

	  echo "<p class='prev-posts'>" . previous_post_link() . "</p>";
		echo "<p class='next-posts'>" . next_post_link() . "</p>";

		echo '</article></div></div>';



		//Comments section - grabs content from comments.php and comment.php
		comments_template();

	}


	//get_sidebar();

?>
<br><p>single.php</p>

</div>



<?php get_footer(); ?>
