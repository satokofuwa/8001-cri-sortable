<?php
/*
 Template Name: 投稿ページ
 Template Post Type: post
*/
get_header();
?>

<div class="contents_wrap">
<main class="main">

  <?php if(have_posts()): while(have_posts()) : the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
    <span class="category"><?php the_category(', '); ?></span>
    <div class="content"><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</main>
</div>

<?php
get_footer();