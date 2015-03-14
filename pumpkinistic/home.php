<?php
/**
 *
 * The template for the home page (blog).
 *
 * @package pumkinistic
 */
?>  
<?php get_header(); ?>
<!-- Beginning of page content. -->  
<div id="content" class="site-content">
<div class="row">
  <div class="col-md-6">
    <!-- Display the page title and a "blurb" at the top.  -->
    <h1>blog</h1>
    <p>
      Karlina's latest adventures.
    </p>
    
    <table class="table table-hover" style="border-style: solid; border-color: #66ff00;">
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
      <?php endwhile; else: ?>
        <h3>
          <?php _e('Sorry, there are no posts.'); ?>
        </h3>
      <?php endif; ?>
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
    <?php get_sidebar(); ?>   
  </div>
</div>
</span>
<?php get_footer(); ?>