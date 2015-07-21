<?php
/*
Template Name: Home - Department 3 Column with Posts
*/


get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>
			

<div id="middlepgbg">
<div id="sectiontitle"><?php bloginfo( $show ); ?></div> 
<div id="middle">
	
	<?php get_sidebar(); ?>

<div id="col2">
  
  <div id="col2col1">
    
    <div id="content">
	
	<?php
	/* Run the loop to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-index.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'homepage-dept-3-col-posts' );
	?>
     
    <?php wp_reset_query() ?>
      </div>
</div>
<div id="col2col2"></div>
<div style="clear:both"></div>
</div><div style="clear:both"></div></div>
</div>
<?php get_footer(); ?>