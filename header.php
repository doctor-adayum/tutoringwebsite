<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta name="theme-color" content="#1976D2">
  <title><?php echo get_bloginfo( 'name' ); ?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php bloginfo('template_directory');?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_directory');?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <?php wp_head();?>
</head>
  
  
  
<body>
  <nav class="cyan" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php bloginfo( 'wpurl' );?>" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <?php wp_list_pages( '&title_li=' ); ?>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <?php wp_list_pages( '&title_li=' ); ?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
