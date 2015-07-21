<?php
/**
 * Template Name: Student Handbook Home
 */
get_header(); ?>

<div id="middlepgbg">
<div id="sectiontitle"><?php bloginfo( $show ); ?></div> 
<div id="middle">
	
	<?php get_sidebar(); ?>

<div id="col2">
  
  <div id="col2col1">
    
    <div id="content">
	<?php
		if (has_post_thumbnail()) {  
		    the_post_thumbnail();  
		}
		?>
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

										

							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

	<?php endwhile; ?>
      </div>
<div style="clear:both"></div>
</div>

<div id="col2col2">
	
	  <?php
	// Begin Contact Info widget area
		if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
		 <div id="right-sidebar">
		    <?php dynamic_sidebar( 'right-sidebar' ); ?>
		 </div>
	 
	 <?php endif; 
	// end Contact Info widget area ?>
</div>

<div style="clear:both"></div>
</div><div style="clear:both"></div></div>
</div>
<?php get_footer(); ?>