<?php
$color = get_field( "color" ); 
?>
<div class="wrap" <? if($color):?> style="background-color:<?=$color;?>;"<?endif;?>>
<div class="page-header container">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
   <? if ( has_post_thumbnail() ): ?>
  <? $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');	?>
	<img src="<?=$thumb[0];?>" alt="<? the_title(); ?>" />
	<!-- SHOW POST TYPE IMAGE -->
<? endif; ?>
</div>
</div>
