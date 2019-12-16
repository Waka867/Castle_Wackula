<p class="byline">
From: 
<?php 
$pst_author 		= get_post()->post_author; 
$name			= get_the_author_meta( 'display_name', $pst_author );
$ID			= get_the_author_meta( 'ID', $pst_author );
$author_page		= get_author_posts_url( $ID );

echo $name;
echo " (";
echo  the_author_posts(); 
echo ") | ";


?>
<a href="<?php echo $author_page; ?>">View Author Page</a> |
Posted: <?php the_time( 'F j, Y | ' ); ?>
<?php esc_html_e( 'Categories: ', 'wptags' ); ?>
<?php the_category( ', ' ); ?>
<?php the_tags( 'Tags: ', ', ' ); ?>
</p>
