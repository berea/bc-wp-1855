<?php
/**
 * Template Name: Homepage - Sustainability
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(''); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- Scripts -->
<script type="text/javascript" src="/scripts/email_link.js"></script>
<?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' ); wp_head();
		?>
<!-- Scripts -->

<!-- stylesheets -->
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/layout955-basic.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/layout955-rtcol.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/layout955-homepages.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/landing-page-3category-slideshow.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/home-sustainability.css" type="text/css" media="screen"/>
<!-- stylesheets -->

<!-- Social Media -->
<meta property="og:image" content="http://www.berea.edu/wp-content/uploads/2014/06/BCLogoFBShare.png"/>
<!-- Social Media -->

</head>

<body>

<?php

add_filter( 'wp_feed_cache_transient_lifetime', create_function( '$a', 'return 0;' ));

?>
	<div id="hdrbar"><div id="hdr"><div id="logo"><a href="/"><img src="/wp-content/themes/BereaCollege/images/hdr-bclogowdip.png" border="0" alt="Berea College Logo" /></a></div>
	<div id="hdrlinksrch">
	    <div id="linkcol1"><a href="/contact-us">CONTACT US</a></div>
	    <div id="linkcol2"><a href="/directory">DIRECTORY</a></div>
	    <div id="linkcol3"><a href="/a-z-index">A-Z INDEX</a></div>
	    <div id="hdrsearch"><div class="search-box">
	<form action="http://search.berea.edu/search" method="get" name="gs" id="gs">
	<input type="text" size="15" class="search-field" name="q" id="s" value="Search Our Web Site" onfocus="if(this.value == 'Search Our Web Site') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search Our Web Site';}"/>
	<input name="btnG" type="submit"  value="" class="search-go" />
	<input type="hidden" name="ie" value="" />
	<input type="hidden" name="site" value="my_collection" />
	<input type="hidden" name="output" value="xml_no_dtd" />
	<input type="hidden" name="client" value="my_collection" />
	<input type="hidden" name="lr" value="" />
	<input type="hidden" name="proxystylesheet" value="my_collection" />
	<input type="hidden" name="oe" value="" />
	</form></div></div>
	  </div>
	</div>
	<div style="clear:both"></div>
	</div>

	<div id="hdrnavbar"><div id="hdrnav"></div>
	<div style="clear:both"></div>
	</div>

<div id="middlepgbg">
	<div id="sectiontitle"><?php bloginfo( $show ); ?></div>
<div id="middle1col">
<div id="banner">
  <div id="featured" >

<?php echo do_shortcode( "[all_in_one_bannerWithPlaylist settings_id='2']" ) ?>

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
      <div style="clear:both"></div>
      <div class="newtree"></div>
    </div>
</div>
</div>
<?php get_footer(); ?>
