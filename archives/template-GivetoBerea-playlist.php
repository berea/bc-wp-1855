<?php
/**
 * Template Name: Give to Berea - Playlist
 */
get_header(); ?>

<div id="middlepgbg">
	<div id="sectiontitle"><p><?php bloginfo( $show ); ?></p>
    <ul id="hornav">
    	<li><a href="https://webapps.berea.edu/givetoberea/givenow" class="firstitem">Give Now</a></li>
    	<li><a href="/give-to-berea/the-berea-fund/">Berea Fund</a></li>
    	<li><a href="http://www.gftpln.org/Home.do?orgId=6211">Gift Planning</a></li>
    	<li><a href="/give-to-berea/recognition/">Recognition</a></li>
    	<li><a href="/give-to-berea/a-worthy-investment/">A Worthy Investment</a></li>
    	<li><a href="/give-to-berea/contact-us/" class="lastitem">Contact Us</a></li>
	</ul>
    <div style="clear:both"></div>
    </div> 
<div id="middle1col">
<div id="banner">
  <div id="featured" > 
<?php echo do_shortcode( "[all_in_one_bannerWithPlaylist settings_id='1']" ) ?> 
  </div>
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
