<?php
/**
 *
 * cssとjsを読み込む設定
**/
function add_css_js() {
  /*cssファイルの読み込み*/
  wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css');
  wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array('reset'), false, 'all');
  
  /* 外部ファイルの場合 */
  wp_enqueue_style('notosans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');

  /*jsファイルの読み込み*/
  wp_enqueue_script('main', get_template_directory_uri().'./assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_css_js');

function first_image() {
  global $post;  /* $postは投稿記事のオブジェクトデータ */
  $first_img = '';

  preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)){
    $first_img = "/assets/img/default.jpg";
  }
  return $first_img;
}

/* ② */
function instagram_template_part() {
  get_template_part('instagram');
}
add_shortcode('top_instagram', 'instagram_template_part');
