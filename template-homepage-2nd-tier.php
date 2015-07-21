<?php
/**
 * Template Name: Homepage - 2nd Tier
 */
get_header(); ?>

<div id="middlepgbg">
	<div id="sectiontitle"><?php bloginfo( $show ); ?></div> 
<div id="middle1col">
<div id="banner">
  <div id="featured" > 
<?php echo do_shortcode( "[all_in_one_contentSlider settings_id='2']" ) ?> 
<?php echo do_shortcode( "[all_in_one_bannerWithPlaylist settings_id='2']" ) ?> 
  </div>
</div>
<div id="hpcontent">
  <?php the_content(); ?>
  <div style="clear:both"></div>
</div>
<?php get_footer(); ?>
