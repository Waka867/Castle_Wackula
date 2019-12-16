<?php

// Does not show comment content if the page/post is password protected and user has not yet authenticated
if( post_password_required() ){
	return;
}



echo '<div id="comments-main-section" class="comments-area">
	<h2><strong>This discussion has ' . get_comments_number() . ' comments.</strong></h2>
	<div id="comments">';




// Set px size for author avatar image in comments list
$attr = [
	'avatar_size' 	=> 75,
	'callback' 	=> 'comment_display'
];
// If comments present, list them
if( have_comments() ){
	wp_list_comments( $attr );
	paginate_comments_links();
};



echo '</div>
	<div id="comment-submission-form">';



if( comments_open() ){
	comment_form();
} else {
	echo '<p class="comments-closed">Sorry, the comment section for this post or page is closed.</p>';
}



echo '
	</div>
</div>';


?>
