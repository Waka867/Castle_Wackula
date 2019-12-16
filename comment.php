<!-- This file specifies exactly how an individual comment will look at a granular level-->

<!-- <div id='comment-<?php comment_ID(); ?>' class='<?php comment_class(); ?>'> -->
<div id='comment-<?php comment_ID();?>' <?php comment_class(); ?>>

	<?php

	echo get_avatar( get_comment_author_email() );

	comment_text();

	$comment_reply_args = [
		'depth' 			=> 1,
		'max_depth' 	=> 4,
		// 'reply_text'	=> '<button class="reply-to-comment-btn">Reply</button>'
		'reply_text'	=> '<i class="material-icons reply-to-comment-btn">comment</i>'
		// 'before'			=> '<div style="text-decoration: none;">',
		// 'after'				=> '</div>'
	]

	?>
		<?php comment_reply_link( $comment_reply_args ); ?> | <span class="comment-info"><?php comment_author_link(); ?></span> |  <span class="comment-info"><?php comment_date( 'm-d-y g:ia' );?></span>

</div>
