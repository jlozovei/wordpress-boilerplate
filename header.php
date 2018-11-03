<?php
/**
 * @package WordPress
 * @subpackage Your Website Name
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Add your site's main color as the content -->
  <!-- <meta name="theme-color" content="#f1f2f3">
  <meta name="msapplication-navbutton-color" content="#f1f2f3">
  <meta name="apple-mobile-web-app-status-bar-style" content="#f1f2f3"> -->

  <!-- Avoid Pinterest plugin in the page -->
  <meta name="pinterest" content="nopin">

  <!-- Social media sharing meta tags -->
  <!-- change the content attributes -->
  <meta property="og:locale" content="en">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php wp_title(''); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <!-- Add your website's URL as the content attribute -->
  <meta property="og:url" content="">
  <meta property="og:site_name" content="<?php wp_title(''); ?>">
  <!-- change href attribute to your open graph image location -->
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/dist/images/open-graph.jpg">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
  <meta name="twitter:title" content="<?php wp_title(''); ?>">
  <!-- change href attribute to your open graph image location -->
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/dist/images/open-graph.jpg">
	
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<!-- change href attribute to your favicon location -->
  <link href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon.png" rel="shortcut icon">	

  <!-- Add your website's URL as the href attribute -->
  <link rel="canonical" href="">

  <?php wp_head(); ?>
</head>
<body>
  <header>
    My awesome header  
  </header>