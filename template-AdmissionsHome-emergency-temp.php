<?php
/**
 * Template Name: Admissions Home - Emergency Temp
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
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/admissions.css" type="text/css" media="screen"/>
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
	    <div id="linkcol1"><a href="http://www.berea.edu/contactus">CONTACT US</a></div>
	    <div id="linkcol2"><a href="http://www.berea.edu/directory">DIRECTORY</a></div>
	    <div id="linkcol3"><a href="http://www.berea.edu/siteindex">A-Z INDEX</a></div>
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
    <div class="fourcolumn">

    <div class="col1">
<h2>Admission Info</h2>
<ul>
	<li class="listchevron-green"><a title="Berea's Academic Requirements" href="http://www.berea.edu/admissions/visit-berea-college/bereas-academic-requirements/">Admission Requirements</a></li>
	<li class="listchevron-green"><a title="Publications and Forms" href="http://www.berea.edu/admissions/admission-information/publications-and-forms/">Publications and Forms</a></li>
	<li class="listchevron-green"><a title="Applying as a New Freshman" href="http://www.berea.edu/admissions/applying-for-admission/applying-as-a-new-freshman/">New Freshman</a></li>
	<li class="listchevron-green"><a title="International Students" href="http://www.berea.edu/admissions/international/">International Students</a></li>
	<li class="listchevron-green"><a title="Applying as a Transfer Student" href="http://www.berea.edu/admissions/applying-for-admission/applying-as-a-transfer-student/">Transfer Students</a></li>
</ul>
</div>
<div class="col2">
<h2>Student Life</h2>
<ul>
	<li class="listchevron-green"><a href="/admissions/why-berea/academic-excellence/">Academic Excellence</a></li>
	<li class="listchevron-green"><a href="/admissions/why-berea/career-preparation/">Career Preparation</a></li>
	<li class="listchevron-green"><a href="/athletics/">Athletics</a></li>
	<li class="listchevron-green"><a href="/cie/">Study Abroad</a></li>
	<li class="listchevron-green"><a href="/admissions/why-berea/service-and-leadership/">Service and Leadership</a></li>
</ul>
</div>
<div class="col3">
<h2>Financial Aid</h2>
<ul>
	<li class="listchevron-green"><a href="/admissions/financial-aid-scholarships/bereas-tuition-scholarship/">Berea's Tuition Scholarship</a></li>
	<li class="listchevron-green"><a href="/admissions/financial-aid-scholarships/aid-for-other-costs/">Labor Grant Aid</a></li>
	<li class="listchevron-green"><a href="/admissions/calc/quick-estimator/">Financial Eligibility</a></li>
	<li class="listchevron-green"><a href="/admissions/calc/net-price-calculator/">Estimate First-Year Costs</a></li>
	<li class="listchevron-green"><a href="http://www.berea.edu/admissions/calc/financial-resource-questionnaire-down-2/">Submit an FRQ</a></li>
</ul>
</div>

     <div class="col4">
	        <a href="https://bereaquickestimator.studentaidcalculator.com"><div id="calculator-box"><div id="estimate-button"></div>
	      </div></a>
	      </div>
      <div style="clear:both"></div>
    </div>

	<div class="fourcolumn">
	    <div class="col1">
	        <div id="stayconnected-box">
	            <div id="ooga">
	                <a href="http://www.facebook.com/berea.admissions"><div id="image-fb"></div></a>
	                <a href="http://twitter.com/BereaAdmissions"><div id="image-twitter"></div></a>
	            </div>
	        </div>
	    </div>
	    <div class="col2">&nbsp;</div>
	    <div class="col3"><div style="margin-left:-232px; margin-top:-45px">
	    <div id="vip-box">
	        <a href="/admissions/request-info/"><div id="image-button1"></div></a>
	        <a href="http://berea.askadmissions.net/vip/Default.aspx"><div id="image-button2"></div></a>
	      </div></div>
	    </div>
	    <div class="col4">
	        <div id="nav-postit">
	        <a href="/admissions/guidance-counselors/"><div id="counselors-button"></div></a>
	        <a href="/connections/"><div id="parents-button"></div></a>
	        <a href="/connections/"><div id="students-button"></div></a>
	      </div>
	      </div>
	    <div style="clear:both"></div>
	  </div>

      <div style="clear:both"></div>
    </div>
    <div style="clear:both"></div>
  </div>
<?php get_footer(); ?>