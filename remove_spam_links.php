<?php
/*
Plugin Name: Remove spam links
Plugin URI: https://seowp.pl/plugins/remove-spam-links-from-wordpress-comments
Description: Removes spam links from wordpress comments area.
Author: AKC 
Email: anna@seowp.pl
Version: 1.0
Author URI: https://seowp.pl
*/

	if(!function_exists("swp_remove_links_from_comments")){	
		function swp_strip_links($content){			
			$regex = '/<a[^>]*>(.*)<\/a>/iU';
			return preg_replace($regex,'', $content);
		}
	 
		add_filter('comment_text', 'swp_remove_links_from_comments');
		function swp_remove_links_from_comments($content){
			return swp_strip_links($content);
		}
	 
	}	 



?>