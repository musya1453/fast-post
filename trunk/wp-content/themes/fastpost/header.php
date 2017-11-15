<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title(); ?></title>
  <meta charset="utf-8"/>
  <meta name="HandheldFriendly" content="false"/>
  <meta name="viewport" content="user-scalable=yes, width=970"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/theme/js/lib/html5.js"></script>
  <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/theme/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/theme/js/js.js"></script>
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/theme/images/favicon.ico" type="image/x-icon">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/theme/css/styles.css" rel="stylesheet" type="text/css">
</head>


<body>
<header class="header-wrapper">
  <div class="header container">
    <a href="http://www.fast-post.com/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme/images/logo.png" alt=""/></a>
    <div class="search-wrapper">
      <input type="search" placeholder="Поиск" class="field-search"/>
      <input type="submit" value="Поиск" class="search-btn"/>
    </div>
  </div>
</header>