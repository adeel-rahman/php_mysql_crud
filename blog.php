<section class="header frm blog">
<div class="container">
<br>
<div class="row">
<?php 
// set the "paged" parameter (use 'page' if the query is on a static front page)
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
$args = array (
    'nopaging'               => false,
    'paged'                  => $paged,
    'posts_per_page'         => '2',
    'post_type'              => 'post',
);

// The Query
$query = new WP_Query( $args );
if ( function_exists('vb_pagination') ) {
	?>
	<div class="col-md-12">
	<div class="paginationDiv">
    <?php vb_pagination( $query ); ?>
	</div>
	</div>
<?php
} 
// The Loop
if ( $query->have_posts() ) {

   while ( $query->have_posts() ) {
        $query->the_post(); ?>
 <div class="col-md-12">
 <article class="blog-post-wrapper wow fadeIn animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
    <header class="author-info">
    <h2 class="blog-post-title"><a href="#"><?php echo the_title(); ?></a></h2>
    <div class="tag-posted-in">
<ul class="list-unstyled">
<li><i class="fa fa fa-calendar"></i> <a href="#">Posted on: <?php echo get_post_time('Y-m-d'); ?></a></li>
<!--li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
<li><i class="fa fa-pencil-alt"></i> <a href="#">Business</a></li>
<li><i class="fa fa-comments"></i> <a href="#">No comment</a></li-->
</ul>
</div>
</header>
<section class="blog-post-content">
<div class="blog-post">
<p><?php echo the_content(); ?></p>
</div>
</section>
</article>
</div>

  <?php  } ?>
  <?php
	if ( function_exists('vb_pagination') ) {
	?>
	<div class="col-md-12">
	<div class="paginationDiv">
    <?php vb_pagination( $query ); ?>
	</div>
	</div>
<?php
} 
?>
</div>
</section>
</div>
<?php
    //next_posts_link( 'Older Entries »', $query->max_num_pages );
} else {
    // no posts found
 ?>
 <div class="col-md-12">
 <?php echo "No Post"; ?>
 </div>
 </div>
</section>
</div>
<?php }
wp_reset_postdata();
?>
<!--#f5f4f4-->
<div class="clear-fix"></div>