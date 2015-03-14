<?php
/**
 *
 * The template for site pages.
 *
 * @package pumkinistic
 */
?>
<?php get_header(); ?>
<!-- Beginning of page content. -->  
<div id="content" class="site-content">
<div class="row">
  <div class="col-md-6">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<?php _e(
		  '<p><strong>Sorry, this page does not exist.</strong></p>'
		  ); ?>
	<?php endif; ?>
  </div>
  <div class="col-md-4">
	<?php get_sidebar(); ?>	
  </div>
</div>
<?php get_footer(); ?>