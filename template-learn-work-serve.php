<?php
/**
 * Template Name: Learn, Work & Serve Homepage
 */
get_header(); ?>

<div id="middlepgbg">
	
<div id="sectiontitle"><?php bloginfo( $show ); ?></div> 

<div id="middle1col">
	
  <div id="banner">
    <div id="featured" >
		<?php echo do_shortcode( "[all_in_one_bannerWithPlaylist settings_id='2']" ) ?>
    </div>

  </div>
  <div id="hpcontent">
    
    <div class="threecolumn">
      <div class="col1">
        <h2>Learn</h2>
        <ul>
          <li class="listchevron-green"><a href="#">Majors & Minors</a></li>
          <li class="listchevron-green"><a href="#">Academic Divisions</a></li>
          <li class="listchevron-green"><a href="#">Convocations</a></li>
          <li class="listchevron-green"><a href="#">Centers, Programs & Resources</a></li>                                        
        </ul>
      </div>
      <div class="col2">
        <h2>Work</h2>
        <ul>
          <li class="listchevron-green"><a href="#">The Labor Program of Berea College</a></li>
          <li class="listchevron-green"><a href="#">Goals & Purposes</a></li>
          <li class="listchevron-green"><a href="#">Labor Departments</a></li>
          <li class="listchevron-green"><a href="#">Job Placement</a></li>
        </ul>
      </div>
      <div class="col3">
        <h2>Serve</h2>
        <ul>
          <li class="listchevron-green"><a href="#">Center for Excellence in Learning through Service (CELTS)</a></li>
          <li class="listchevron-green"><a href="#">Community Service</a></li>
          <li class="listchevron-green"><a href="#">Service-Learning</a></li>
          <li class="listchevron-green"><a href="#">Bonner Scholars</a></li>
          <li class="listchevron-green"><a href="#">Campus Christian Center</a></li>
 	      <li class="listchevron-green"><a href="#">Loyal Jones Appalachian Center</a></li>
		  <li class="listchevron-green"><a href="#">Office of Externally Sponsored Programs</a></li>
        </ul>
      </div>
      <div style="clear:both"></div>
    </div>
    <div class="twocolumn">
      <div class="col1">
        <div class="adbox400x165 bgcolor-poolblue box-400x165-solid">
          <div class="ftr-content">
            <div class="photo-left"><img src="../../images/samples/photo-160x125.jpg" alt="photo" width="160" height="125" /></div>
            <h2>Column 1</h2>
            <p>This is some text for the column box. The text placed here serves as filler text in order to see how text would appear inside the box. Please be aware that the space is limited to only five lines of text.</p>
          </div>
          <div class="readmore"><a href="#" ><img src="../../images/buttons/btn-readmore.png" alt="Read More" align="Read More" /></a></div>
        </div>
      </div>
      <div class="col2">
        <div class="adbox400x165 bgcolor-poolblue box-400x165-solid">
          <div class="ftr-content">
            <div class="photo-left"><img src="../../images/samples/photo-160x125.jpg" alt="photo" width="160" height="125" /></div>
            <h2>Column 2</h2>
            <p>This is some text for the column box. The text placed here serves as filler text in order to see how text would appear inside the box. Please be aware that the space is limited to only five lines of text.</p>
          </div>
          <div class="readmore"><a href="#" ><img src="../../images/buttons/btn-readmore.png" alt="Read More" align="Read More" /></a></div>
        </div>
      </div>
      <div style="clear:both"></div>
    </div>
    <div style="clear:both"></div>
  </div>
<?php get_footer(); ?>