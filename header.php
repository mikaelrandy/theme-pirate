<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

</style>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<div id="container">
<div id="header">
   <div class="branding">   
      <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      <h2><?php bloginfo('description'); ?></h2>
   </div>      
</div>

     <div id="menu">
      <?php
       $string = wp_page_menu ('show_home=1&depth=1&sort_column=menu_order&title_li=');
       $pattern = ' current_page_item "';$replacement = '" id="current"';
       echo str_replace($pattern, $replacement, $string); ?>    
   </div> 