<?php
/*
  Template Name: 固定ページ
*/
get_header();
?>

<div class="contents_wrap">
<main class="main">

  <?php if(have_posts()): while(have_posts()) : the_post(); ?>
    <h1><?php the_title();?></h1>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>

</main>
</div>

<?php
get_footer();