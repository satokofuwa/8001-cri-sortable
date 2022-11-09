<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> » <?php } ?> <?php wp_title(); ?></title>
  <!-- cssやjsファイルはfunctions.phpに読み込む設定を書きます。 -->
<?php wp_head(); ?>
</head>
<body>

  <header class="header">
    <ul class="header__sns">
      <li>
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns01.png" alt="">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns02.png" alt="">
        </a>
      </li>
    </ul>
    <ul class="header__navi">
      <li><a href="<?php echo get_permalink(0); ?>">PHILOSOPHY</a></li>
      <li><a href="<?php echo get_permalink(0); ?>">NEWS</a></li>
      <li><a href="<?php echo get_permalink(0); ?>">MENU</a></li>
      <li><a href="<?php echo get_permalink(0); ?>">ACCESS</a></li>
      <li><a href="<?php echo get_permalink(0); ?>">CONTACT</a></li>
    </ul>
  </header>