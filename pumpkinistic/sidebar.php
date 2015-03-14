<?php
/**
 * The sidebar for the Pumpkinistic theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pumkinistic
 */
?>
<div id="sidebar">

  <!-- Site Title -->
  <br>
  <div class="boxRounder" align="center">
    <h3>
      <?php bloginfo( 'title' ); ?>
    </h3>
  </div>
  
<!-- Carousel displaying featured blog posts -->
<br>
<div class="boxRounder">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="http://pumpkinprogrammer.com/2014/03/30/natures-poetry-the-fibonacci-sequence/" target="_blank">
      <img src="http://pumpkinprogrammer.com/wp-content/uploads/2014/07/slide_fibonacci.png" class="img-responsive">
      </a>
    </div>

    <div class="item">
      <a href="http://pumpkinprogrammer.com/2014/10/03/intro-to-binary-numbers/" target="_blank">
      <img src="http://pumpkinprogrammer.com/wp-content/uploads/2014/07/slide_binary.png" class="img-responsive">
      </a>
    </div>

    <div class="item">
      <a href="http://pumpkinprogrammer.com/2014/06/21/c-tutorial-intro-to-hash-tables/" target="_blank">
      <img src="http://pumpkinprogrammer.com/wp-content/uploads/2014/07/slide_hash.png" class="img-responsive">
      </a>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  
  <!-- Site Tagline -->
  <br>
  <div class="boxRounderTwo" align="center">
    <h4>
      <?php bloginfo( 'description' ); ?>
    </h4>
  </div> 

  <!-- Social Media buttons -->
  <br>
  <table>
  <tr>
    <td class="col-md-2 col-sm-2">
      <a href="https://www.youtube.com/user/pumpkinprograms" target="_blank">
        <img src="http://pumpkinprogrammer.com/wp-content/uploads/2015/01/youtube.png" class="img-responsive" width="80px">
      </a>
    </td>
    <td class="col-md-2 col-sm-2">
      <a href="http://github.com/pumpkinprogrammer" target="_blank">
        <img src="http://pumpkinprogrammer.com/wp-content/uploads/2015/01/github.png" class="img-responsive" width="80px">
      </a>
    </td>
    <td class="col-md-2 col-sm-2">
      <a href="https://www.linkedin.com/pub/karlina-beringer/51/152/93b" target="_blank">
        <img src="http://pumpkinprogrammer.com/wp-content/uploads/2015/01/linkedin.png" class="img-responsive" width="80px">
      </a>
    </td>
    <td class="col-md-2 col-sm-2">
      <a href="http://www.facebook.com/karlina.beringer" target="_blank">
        <img src="http://pumpkinprogrammer.com/wp-content/uploads/2015/01/facebook-square.png" class="img-responsive" width="80px">
      </a>
    </td>
  </tr>
  </table>
  
  <!-- Recent Posts -->
  <br>
  <div class="boxRounderTwo">
    <h4>Recent Posts</h4>
    <ul>
      <?php
        $recent_posts = wp_get_recent_posts();
        foreach( $recent_posts as $recent ){
          echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
        }
        ?>
      </ul>
  </div>
  
  <!-- Categories -->
  <br>
  <div class="boxRounderTwo">
    <h4>Post Categories</h4>
    <ul>
    <?php wp_list_categories( 'show_count=1&style=list&title_li=' ); ?> 
    </ul>
  </div>
  
</div><!--/.sidebar -->









 