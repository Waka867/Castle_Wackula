<?php


get_header();

//This is where we utilize a template part to display the site title banner
echo get_template_part('template-parts/site-banner');

?>


<div class='container site-content' class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="author-profile">
			<ul style="list-style: none;">
				<li><?php echo get_avatar( get_the_author_meta( 'ID' ), 256 ); ?></li>
				<li>Display Name: <?php the_author_meta( 'display_name' ); ?></li>
				<li>Name: <?php the_author_meta( 'first_name' ); echo " "; get_the_author_meta( 'last_name' ); ?></li>
				<li>NickName: <?php the_author_meta( 'nickname' ) ?></li>
				<li>Description: <?php the_author_meta( 'description' ) ?></li>
				<li>Nice Name: <?php the_author_meta( 'user_nicename' ) ?></li>
				<li><button type="button" onclick="history.back()" />Go Back</button></li>
			</ul>
		</div>
	</div>
	<div class="col-md-2">
		<?php //wp_list_authors(); ?>
	</div>
</div>


<?php get_footer(); ?>
