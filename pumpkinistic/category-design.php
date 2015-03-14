<?php
/**
 *
 * The template for blog posts under the "design" category.
 *
 * @package pumkinistic
 */
?>

<!-- Insert code from header.php -->
<?php get_header(); ?>
<div id="content" class="site-content">
<div class="row">
  <div class="col-md-6">
    <h1>category: design</h1>
    <p>
      Karlina's latest adventures in design.
    </p>

    <!-- Display the blog post links in a hover table.  -->
    <table class="table table-hover" style="border-style: solid; border-color: #66ff00;">
    
    <!-- Start of "The Loop." Iterates through all blog posts. -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <tr style="border-style: solid; border-color: #66ff00;">
        <td class="col-md-1">
          <?php the_post_thumbnail( array(75,75) ); ?>
        </td>
        <td class="col-md-4">
          <h4>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h4>
          <p>
  	    <?php the_time('F j, Y'); ?>
  	  </p>
        </td>
      </tr>
      <!-- Display a "no posts" message if no posts were queried. -->
      <?php endwhile; else: ?>
        <h3>
          <?php _e('Sorry, there are no posts.'); ?>
        </h3>
      <?php endif; ?>
      <!-- End of "The Loop." -->
      </table>
      
    <div class="navigation boxRounderThree col-md-4">
      <?php posts_nav_link(
       ' &#8734; ',
       '<strong style="color:black;font-family:sans-serif;">&#8592; newer</strong>',
       '<strong style="color:black;font-family:sans-serif;">older &#8594;</strong>'); 
       ?> 
    </div>

  </div>
  <div class="col-md-4">
    <!-- Insert code from sidebar.php -->
    <?php get_sidebar(); ?>	
  </div>
</div>

<!-- Insert code from footer.php -->
</div>
<?php get_footer(); ?>