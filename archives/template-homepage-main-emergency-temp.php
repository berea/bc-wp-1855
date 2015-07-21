<?php
/**
 * Template Name: Homepage - Main - Emergency Temp
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
  <div id="featured" > <?php echo do_shortcode( "[all_in_one_contentSlider settings_id='2']" ) ?> </div>
</div>
<div id="hpcontent">
  <div class="fourcolumn">
<div class="col1">
<h2><a href="/admissions/">Admissions</a></h2>
<ul>
	<li class="listchevron-green"><a href="/admissions/applying-for-admission/">Apply for Admission</a></li>
	<li class="listchevron-green"><a href="http://www.berea.edu/admissions/request-info/">Request Information</a></li>
	<li class="listchevron-green"><a href="/admissions/visit-berea-college/">Visit Campus</a></li>
	<li class="listchevron-green"><a href="/admissions/financial-aid-scholarships/">Scholarships &amp; Financial Aid</a></li>
</ul>
</div>
<div class="col2">
<h2><a href="/academics/">Academics</a></h2>
<ul>
	<li class="listchevron-green"><a href="/academics/">Degree Programs</a></li>
	<li class="listchevron-green"><a href="/academics/majors-minors/">Majors &amp; Minors</a></li>
	<li class="listchevron-green"><a href="http://www.berea.edu/hutchinslibrary/">Library</a></li>
	<li class="listchevron-green"><a href="http://webapps.berea.edu/cataloghandbook/">Catalog &amp; Student Handbook</a></li>
</ul>
</div>
<div class="col3">
<h2><a href="/about/">About Berea</a></h2>
<ul>
	<li class="listchevron-green"><a href="/about/mission/">Mission, History &amp; Motto</a></li>
	<li class="listchevron-green"><a href="/lws/">Learning, Labor &amp; Service</a></li>
	<li class="listchevron-green"><a href="/visitors-center/">Our Campus</a></li>
	<li class="listchevron-green"><a href="/about/distinctions/">Distinctions</a></li>
</ul>
</div>
<div class="col4">
<h2>On Campus</h2>
<ul>
	<li class="listchevron-green"><a href="http://bcnow.berea.edu/">News</a></li>
	<li class="listchevron-green"><a href="http://community.berea.edu/calendar/main.php">Events Calendar</a></li>
	<li class="listchevron-green"><a href="/convocations/">Convocations</a></li>
	<li class="listchevron-green"><a href="/athletics/">Athletics</a></li>
</ul>
</div>
<div style="clear: both;"></div>
</div>
<div class="twocolumn">
<div class="col1">
<div class="adbox400x165 bgcolor-orangezest box-400x165-gradient4" style="padding-top: 0 !important; height: 150px;">
<div id="admissions-ftr"><img src="/wp-content/uploads/2012/08/hulsing-admissions-ftr-144.png" alt="Lily Hulsing" width="95" height="144" border="0" />
<div class="lnk">

<a href="http://www.youtube.com/watch?v=G3-w2CRQvkI&amp;feature=plcp">Lily Hulsing</a>

</div>
</div>
<div id="admissions-ftr-content">
<h2>Priority #2 Deadline</h2>
February 28 is the second priority deadline for admissions applications. Spaces are filling up fast, so apply today.

</div>
<div id="admissions-ftr-content-btn"><a href="/admissions/applying-for-admission/"><img src="/wp-content/themes/BereaCollege/images/homepage/btn-apply.png" alt="Apply" width="77" height="35" /></a></div>
</div>
</div>
<div class="col2">
<div class="adbox400x165 bgcolor-leafgreen box-400x165-gradient4" style="padding-top: 0 !important; height: 150px;">
<div id="donors-ftr"><img src="/wp-content/uploads/2012/08/20120509-draper-givetoberea.png" alt="Draper Hall" width="150" height="175" align="left" border="0" /></div>
<div id="donors-ftr-content">
<h2>Congratulations!</h2>
Berea College Alumni have met a $50,000 matching gift challenge. <em>Thank you!</em>

</div>
<div id="donors-ftr-content-btn"><a href="/give-to-berea/theres-still-time-your-gift-will-double-in-value/"><img src="/wp-content/themes/BereaCollege/images/homepage/btn-givenow.png" alt="Give Now" width="110" height="35" border="0" /></a></div>
</div>
</div>
<div style="clear: both;"></div>
</div>
  <div id="newsfeatures">
    <h2>News &amp; Events</h2>
    <div class="lcol">
      <div class="content"> 
        <!-- Start feed from BC Spotlight -->
        
        <?php 

					function catch_that_image($item) {
				  		global $post, $posts;
				  		$first_img = '';
				  		ob_start();
				  		ob_end_clean();
				  		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $item->get_content(), $matches);
				  		$first_img = $matches [1] [0];

				  		if(empty($first_img)){ //Defines a default image
				    		$first_img = "http://www.berea.edu/berea-spotlight/files/2012/12/20120926_AlicestyneTurley-2.jpg";
				  		}
				  		return $first_img;
					}
				?>
        <?php // Get RSS Feed(s)

					include_once(ABSPATH . WPINC . '/feed.php');
					$rss = fetch_feed(get_site_url().'/berea-spotlight/home-page/feed/');
				 	if (!is_wp_error( $rss ) ) : 
				  	$maxitems = $rss->get_item_quantity(1);
				  	$rss_items = $rss->get_items(0, $maxitems);				
				   		endif;
				?>
        <?php 
					if ($maxitems == 0) echo '<li>No news at this item.</li>';

				    else
				        // Loop through each feed item and display each item as a hyperlink.
				        foreach ( $rss_items as $item ) : ?>
        <div class="picture">
          <?php $image = catch_that_image($item); ?>
          <img src="<?php echo $image ?>" width="130" alt=""></div>
        <a href="<?php echo $item->get_permalink(); ?>"
				          	title="<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>" style="float:">
        <h3><?php echo $item->get_title(); ?></h3></a>
        <p><?php echo $item->get_description(); ?></p>
        <?php endforeach; ?>
        
        <!-- End feed from BC Spotlight --> 
        
      </div>
      <div style="clear:both;"></div>
    </div>
    <div class="rcol"> 
      
      <!-- Start RSS feed from BCnow -->
      
      <h3>
        <?php _e('Recent News From BCnow:'); ?>
      </h3>
      <?php // Get RSS Feed(s)
						include_once(ABSPATH . WPINC . '/feed.php');

						// Get a SimplePie feed object from the specified feed source.
						$rss = fetch_feed('http://bcnow.berea.edu/feed/');
						if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly 
						    // Figure out how many total items there are, but limit it to 5. 
						    $maxitems = $rss->get_item_quantity(5); 

						    // Build an array of all the items, starting with element 0 (first element).
						    $rss_items = $rss->get_items(0, $maxitems); 
						endif;
						?>
      <ul>
        <?php if ($maxitems == 0) echo '<li>No items.</li>';
						    else
						    // Loop through each feed item and display each item as a hyperlink.
						    foreach ( $rss_items as $item ) : ?>
        <li> <a href='<?php echo esc_url( $item->get_permalink() ); ?>'
						        title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'> <?php echo esc_html( $item->get_title() ); ?></a> </li>
        <?php endforeach; ?>
      </ul>
      
      <!-- Stop RSS feed from BCnow --> 
    </div>
    <div style="clear:both;"></div>
    <div class="morenewsftrs">
      <ul>
        <li class="title">More Stories:</li>
        <li><a href="http://bcnow.berea.edu">BCnow</a></li>
        <li class="lastitem"><a href="/berea-spotlight/">Berea Spotlight</a></li>
      </ul>
    </div>
    <div style="clear:both"></div>
  </div>
  <div style="clear:both"></div>
</div>
<?php get_footer(); ?>