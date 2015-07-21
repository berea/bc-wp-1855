<?php
/**
 * Template Name: Microsite
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
    <div class="fourcolumn">
      <div class="col1">
        <h2>Column 1</h2>
        <ul>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>                                        
        </ul>
      </div>
      <div class="col2">
        <h2>Column 2</h2>
        <ul>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li> 
        </ul>
      </div>
      <div class="col3">
        <h2>Column 3</h2>
        <ul>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li> 
        </ul>
      </div>
      <div class="col4">
        <h2>Column 4</h2>
        <ul>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li> 
        </ul>
      </div>
      <div style="clear:both"></div>
    </div>
    <div class="threecolumn">
      <div class="col1">
        <h2>Column 1</h2>
        <ul>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>                                        
        </ul>
      </div>
      <div class="col2">
        <h2>Column 2</h2>
        <ul>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li> 
        </ul>
      </div>
      <div class="col3">
        <h2>Column 3</h2>
        <ul>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li>
          <li class="listchevron-green"><a href="#">Link</a></li> 
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