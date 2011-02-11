<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2><span>',
        'after_title' => '</span></h2>',
    ));

//function to replace invalid ellipsis with text linking to the post
function elpie_excerpt($text)
{
   return str_replace('[...]', '<a href="'. get_permalink($post->ID) . '">' . '[read more...]' . '</a>', $text);
}
add_filter('the_excerpt', 'elpie_excerpt');   

//function to be compatible with wp 2.6 and 2.7
add_filter('comments_template', 'legacy_comments');
function legacy_comments($file) {
	if(!function_exists('wp_list_comments')) : // WP 2.7-only check
		$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;
	return $file;
}
?>