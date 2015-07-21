<?php
/**
 * Template Name: Berea Homepage
 */
get_header(); ?>

<div id="middlepgbg">
	
<div id="middle1col">

    <div id="middle1col">
    <div id="topnav">
      <ul>
        <li><a href="/admissions">Prospective Students</a></li>
        <li><a href="/give-to-berea">Give to Berea</a></li>
        <li><a href="http://www.bereacollegealumni.com">Alumni</a></li>
        <li><a href="/campus">Community</a></li>
      </ul>
    </div>
	
  <div id="banner">
    <div id="featured" >
		<?php echo do_shortcode( "[all_in_one_contentSlider settings_id='2']" ) ?>
    </div>

  </div>
  <div id="hpcontent">

	<?php the_content(); ?>


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
					$rss = fetch_feed('http://www.berea.edu/berea-spotlight/home-page/feed/');
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