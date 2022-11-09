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