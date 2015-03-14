<?php
/**
 *
 * The template for the index page.
 *
 * @package pumkinistic
 */
?>
<?php get_header(); ?>
  <div class="row">
    <div class="col-md-6">
        <!-- Wordpress Loop displays the content of a post. -->
	<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
	  <h1>
	    <?php the_title(); ?>
	  </h1>
	  <p>
            <strong class="blogdate"> 
              <?php the_time('F jS') ?>, <?php the_time('Y') ?>
            </strong>
          </p>
          <div class="entrybody">
             <?php the_content();?>
             <hr>
             <p class="blogcategory">
               <strong>
                 Categories: <?php the_category(' &bull; '); ?>
               </strong>
             </p>
             <hr>
          </div>
        <!-- End of The Loop. -->
	<?php endwhile; else: ?>
		  <?php _e(
		    '<h2>No results found.</strong></h2>'
		    ); ?>
	<?php endif; ?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>

