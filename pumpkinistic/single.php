<?php
/**
 *
 * The template for single blog posts.
 *
 * @package pumkinistic
 */
?>
<!-- Display the navigation bar at the top of the page. -->
<?php get_header(); ?>

<!-- Display post content on left side of the page. -->
<div id="content" class="site-content">
<div class="row">
  <div class="col-md-6">
      <!-- Wordpress Loop displays the content of a post. -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry <?php if(is_home() && $post==$posts[0] && !is_paged()) echo ' firstpost';?>">
          <h3 class="entrytitle" id="post-<?php the_ID(); ?>"> 
            <?php the_title(); ?>
          </h3>
          <h4 class="blogdate">
            <?php the_time('F jS') ?>, <?php the_time('Y') ?> 
          </h4>
          <div class="entrybody">
            <?php the_content();?>
          </div>
          <div>
            <hr>
            <p class="blogcategory">
              <strong>
                Categories: <?php the_category(' &bull; '); ?>
              </strong>
            </p>
          </div>
        </div>	
        <!-- End of The Loop. -->
        <?php endwhile; else: ?>
        <p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>
        <?php endif; ?>
        <div class="row">
          <!-- Link to Next Post. -->
          <div class="col-md-4">
            <div class="well boxRounderTwo">
              <strong> Next Post: </strong> <br>
              <?php next_post_link('<strong>%link</strong>'); ?>
            </div>
          </div>
         <!-- Link to Previous Post. -->
         <div class="col-md-4">
           <div class="well boxRounderTwo">
             <strong> Previous Post: </strong><br>
             <?php previous_post_link('<strong>%link</strong>'); ?>
           </div>
         </div>
       </div> 
  </div>
  
   <!-- Display the sidebar content (e.g. social media buttons). -->
   <!-- On a mobile device, the sidebar appears at the bottom.   -->
   <div class="col-md-4">
     <?php get_sidebar(); ?> 
   </div>
</div>

<!-- Display the copyright info at the bottom of the page.    -->
</div>
<?php get_footer(); ?>