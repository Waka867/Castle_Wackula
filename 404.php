<?php 


get_header(); 

//This is where we utilize a template part to display the site title banner
echo get_template_part('template-parts/site-banner');

?>


<div class='container site-content'>

	<article id="" class="row">
		<div class="col-md-12">
			<h1 style="text-align: center; font-size: 3em;">Whoops! It's a 404!</h1>
			<img style="width: 50%; display: block; margin: 5% auto 0 auto;" src="https://media.giphy.com/media/Beyusevd47X7W/giphy.gif">
		</div>
	</article>

	<article id="" class="row" style="text-align: center;">
		<div class="col-md-12">
			<h1>Sorry, the page you are looking for could not be found</h1>
			<?php	get_search_form(); 	//get_sidebar(); ?>
		</div>
	</article>

</div>


<?php get_footer(); ?>
