<?php
/**
 * Template Name: Berea Homepage
 */
get_header(); ?>

<div id="middlepgbg">
	
<div id="middle1col">
	
  <div id="banner">
    <div id="featured" >
		<?php echo do_shortcode( "[all_in_one_contentSlider settings_id='2']" ) ?>
    </div>

  </div>
  <div id="hpcontent">
    <div class="fourcolumn">
      <div class="col1">
        <h2><a href="/admissions">Admissions</a></h2>
        <ul>
          <li class="listchevron-green"><a href="/admissions/applying-for-admission/">Apply for Admission</a></li>
          <li class="listchevron-green"><a href="/admissions/request-information/">Request Information</a></li>
          <li class="listchevron-green"><a href="/admissions/visit-berea-college/">Visit Campus</a></li>
          <li class="listchevron-green"><a href="/admissions/financial-aid-scholarships/">Scholarships & Financial Aid</a></li>
        </ul>
      </div>
      <div class="col2">
        <h2><a href="/academics/">Academics</a></h2>
        <ul>
          <li class="listchevron-green"><a href="/academics/">Degree Programs</a></li>
          <li class="listchevron-green"><a href="/academics/majors-minors/">Majors & Minors</a></li>
          <li class="listchevron-green"><a href="/hutchins-library/">Library</a></li>
          <li class="listchevron-green"><a href="/catalog-handbook/">Catalog & Student Handbook</a></li>
        </ul>
      </div>
      <div class="col3">
        <h2><a href="/about">About Berea</a></h2>
        <ul>
          <li class="listchevron-green"><a href="/about/mission/">Mission, History & Motto</a></li>
          <li class="listchevron-green"><a href="#">Learning, Labor & Service</a></li>
          <li class="listchevron-green"><a href="#">Our Campus</a></li>
          <li class="listchevron-green"><a href="#">Distinctions</a></li>
        </ul>
      </div>
      <div class="col4">
        <h2>On Campus</h2>
        <ul>
          <li class="listchevron-green"><a href="http://bcnow.berea.edu/">News</a></li>
          <li class="listchevron-green"><a href="http://community.berea.edu/calendar/">Events Calendar</a></li>
          <li class="listchevron-green"><a href="/convocations/">Convocations</a></li>
          <li class="listchevron-green"><a href="/athletics/">Athletics</a></li>
        </ul>
      </div>
      <div style="clear:both"></div>
    </div>
  

    <div class="twocolumn">
	        <div class="col1">
	          <div style="padding-top:0 !important; height:150px;" class="adbox400x165 bgcolor-orangezest box-400x165-gradient4">
	            <div id="admissions-ftr"><img width="160" height="145" border="0" alt="Sam Gleaves" src="/wp-content/themes/BereaCollege/images/homepage/20110505_SG_cut_out-160.png">
	                <div class="lnk"><ul><li><a href="bcspotlight/20110414-samgleaves.asp">Sam Gleaves</a></li></ul></div>
	            </div>
	            <div id="admissions-ftr-content">
	              <h2>Apply for Admission</h2>
	              <p>Berea is America's Best College Buy. We offer a great education at great value with no fee to apply.</p>
	            </div><div id="admissions-ftr-content-btn"><a href="http://www.berea.edu/prospectivestudents/applynow"><img width="77" height="35" alt="Apply" src="/wp-content/themes/BereaCollege/images/homepage/btn-apply.png"></a> </div>
	          </div>
	        </div>
	
	        <div class="col2">
	          <div style="padding-top:0 !important; height:150px;" class="adbox400x165 bgcolor-leafgreen box-400x165-gradient4">
	            <div id="donors-ftr"><img width="160" height="145" border="0" alt="Allyse Taylor" src="/wp-content/themes/BereaCollege/images/homepage/20110628-allysetaylor-160.png">
	              <div class="lnk"><ul>
	                <li><a href="http://www.berea.edu/givetoberea/now-more-than-ever/allyse-taylor.asp">Allyse Taylor</a></li>
	              </ul></div>
	            </div>
	            <div id="donors-ftr-content">
	              <h2>Now More Than Ever</h2>
	              <p>The need for Berea College has never been greater. Learn how you can help continue Berea's tradition of making an impact on the world. </p>

	            </div>
	            <div id="donors-ftr-content-btn"><a href="http://www.berea.edu/givetoberea/givenow/default.asp"><img width="110" height="35" border="0" alt="Give Now" src="/wp-content/themes/BereaCollege/images/homepage/btn-givenow.png"></a> </div>
	          </div>
	        </div>
	        <div style="clear:both"></div></div>

    <div style="clear:both"></div>
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
				    		$first_img = "/images/default.jpg";
				  		}
				  		return $first_img;
					}
				?>

				<?php // Get RSS Feed(s)
					include_once('/wp-includes' . '/feed.php');
					$rss = fetch_feed('http://192.68.112.220/berea-spotlight/home-page/feed/');
				 	if (!is_wp_error( $rss ) ) : 
				  	$maxitems = $rss->get_item_quantity(1);
				  	$rss_items = $rss->get_items(0, $maxitems);				
				   		endif;
				?>
				
				
				<?php 
					if ($maxitems == 0) echo '<li>No items.</li>';

				    else
				        // Loop through each feed item and display each item as a hyperlink.
				        foreach ( $rss_items as $item ) : ?>

				        	<div class="picture"><?php $image = catch_that_image($item); ?>
						    <img src="<?php echo $image ?>" width="130" alt=""></div>
						
				      		 <a href='<?php echo $item->get_permalink(); ?>'
				          	title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'style="float:">
				         	 
				       		<h3><?php echo $item->get_title(); ?></a></h3>
				             <p><?php echo $item->get_description(); ?></p>
				      	
				
				      <?php endforeach; ?>
					
				
		<!-- End feed from BC Spotlight -->	

	          </div>
	          <div style="clear:both;"></div>
	        </div>
	
	        <div class="rcol">
		
				<!-- Start RSS feed from BCnow -->

						<h3><?php _e('Recent News From BCnow:'); ?></h3>
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
						    <li>
						        <a href='<?php echo esc_url( $item->get_permalink() ); ?>'
						        title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
						        <?php echo esc_html( $item->get_title() ); ?></a>
						    </li>
						    <?php endforeach; ?>
						</ul>

					<!-- Stop RSS feed from BCnow -->
	</div>
	        <div style="clear:both;"></div>
	      <div class="morenewsftrs">
	            <ul>
	              <li class="title">More Stories:</li>
	              <li><a href="http://bcnow.berea.edu">BCnow</a></li>
	              <li class="lastitem"><a href="http://192.68.112.220/berea-spotlight/">Berea Spotlight</a></li>
	            </ul>
	          </div>
	
      <div style="clear:both"></div>
    </div>
    <div style="clear:both"></div>
  </div>
<?php get_footer(); ?>