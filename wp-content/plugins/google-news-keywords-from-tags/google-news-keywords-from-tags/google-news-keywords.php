<?php
/*
	Plugin Name: Google News Keywords from Tags
	Plugin URI:  http://wordpress.org/extend/plugins/google-news-keywords/
	Description: Uses your post tags to add Google News Keywords meta tag
	Version:     1.0
	Author:      ThematoSoup
	Author URI:  http://thematosoup.com
	License:     GPL2 or later
 */

add_action( 'wp_head', 'thsp_add_google_news_keyword_meta' );
function thsp_add_google_news_keyword_meta() {
	global $post;
	
	if( is_single() ) {	
		$thsp_post_tags = wp_get_post_tags( $post->ID );
			// Check if post has tags
			if ( !empty( $thsp_post_tags ) ) {
			
			$thsp_tags_list = '';
			foreach( $thsp_post_tags as $thsp_post_tag ) {
				$thsp_tags_list .= $thsp_post_tag->name . ', ';
			}
		
			// Insert the meta tag, remove comma and space at the end
			echo '<meta name="news_keywords" content="' . esc_attr( substr( $thsp_tags_list, 0, -2 ) ) . '">';
		}
	}
}