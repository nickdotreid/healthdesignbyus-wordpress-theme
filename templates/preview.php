<article <?php post_class("preview"); ?>>
	<div class="container">
		<h2><a href="<?php the_permalink(); ?>"><? the_title(); ?></a></h2>
		<div class="entry-summary">
    		<?php the_excerpt(); ?>
  		</div>
  	<? if ( has_post_thumbnail() ): ?>
  		<? $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');	?>
  		<a href="<?php the_permalink(); ?>">
  			<img src="<?=$thumb[0];?>" alt="<? the_title(); ?>" />
  		</a>
  		<!-- SHOW POST TYPE IMAGE -->
  	<? endif; ?>
	</div>
</article>