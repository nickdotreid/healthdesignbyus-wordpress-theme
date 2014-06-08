<?php
/*
Template Name: Custom Template
*/
?>
<article class="wrap">
	<div class="container">
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
	</div>
</article>
<?
$child_query = new WP_Query(array(
	'post_type' => 'page',
	'post_parent' => get_the_ID(),
	));
while($child_query->have_posts()){
	$child_query->the_post();
	include(locate_template('templates/preview.php'));
}
wp_reset_postdata();
?>