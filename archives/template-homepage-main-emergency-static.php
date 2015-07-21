<?php
/**
 * Template Name: Homepage - Main - Emergency-Static
 */
get_header(); ?>

<div id="middlepgbg">
<div id="middle1col">
<div id="topnav">
  <ul>
    <li><a href="/admissions/">Prospective Students</a></li>
    <li><a href="/give-to-berea/">Give to Berea</a></li>
    <li><a href="http://www.bereacollegealumni.com/">Alumni</a></li>
    <li><a href="/campus/">Community</a></li>
  </ul>
</div>
<div id="banner">
  <div id="featured" > <?php echo do_shortcode( "[all_in_one_contentSlider settings_id='1']" ) ?> </div>
</div>
<div id="hpcontent">
 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <?php if ( is_front_page() ) { ?>
          <?php } else { ?>
          <?php } ?>
          <?php the_content(); ?>
          <?php endwhile; ?>
  <div style="clear:both"></div>
</div>
<?php get_footer(); ?>