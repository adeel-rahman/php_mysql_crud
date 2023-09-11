<?php get_header();
 $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if ((strpos($url,'page') !== false) or (strpos($url,'blog') !== false)) {
include('blog.php'); 
}else{ 
include('content.php');
}get_footer(); ?>