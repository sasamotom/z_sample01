<!DOCTYPE html>
<html dir="ltr" lang="ja">
<?php if ( is_home() && is_front_page() ) :?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<?php else: ?>
 <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/article#">
<?php endif; ?>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <!-- <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/_assets/css/style.css" type="text/css" /> -->
  <!-- <link rel="shortcut icon" href=""> -->
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap">
<?php if( is_user_logged_in() ) : ?>
  <!-- WPにログインしている場合はヘッダーをWP管理バー分（32px）下にずらす -->
  <style type="text/css">
    .header { margin-top: 32px; }
  </style>
<?php endif; ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <nav class="gnav" id="gnav">
    <?php wp_nav_menu( array (
      'theme_location' => 'global',                     // 登録したメニューのキーを入れる
      'items_wrap' => '<ul class="gnavList">%3$s</ul>', // ulを指定
      'container' => false,                             // "div"や"nav"を指定するとラッパー生成できるけどclassをつけたい場合はこのPHP自体をnavで括る方が早い
      'echo' => true,                                   // falseで変数として出力（加工ができる）
    )); ?>
  </nav>
</header>

