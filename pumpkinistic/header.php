<?php
/**
 * The header for the Pumpkinistic theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pumkinistic
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- Start of head code -->
<head>

<!-- Set up the meta data for the page. -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

<!-- Set up the page title and favicon. -->
<link rel="icon" href="http://pumpkinprogrammer.com/wp-content/uploads/2014/12/pp_favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://pumpkinprogrammer.com/wp-content/uploads/2014/12/favicon.ico" type="image/x-icon" />
<title><?php wp_title(''); ?></title>

<!-- End of head code -->
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>   
<?php wp_head(); ?>
</head>

<!-- Beginning of body code --> 
<body <?php body_class(); ?>>
  
<!-- Display a fixed navigation bar at the top of the screen -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>">
        <img src="http://pumpkinprogrammer.com/wp-content/uploads/2014/12/pp_logo.png" height="26" width="35">
      </a>
    </div><!--/.navbar-header-->
    <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><?php wp_list_pages(array('title_li' => '')); ?></li>
      </ul>
    </div><!--/.collapse-->
  </div><!--/.container-->
</nav><!--/.navbar-->

