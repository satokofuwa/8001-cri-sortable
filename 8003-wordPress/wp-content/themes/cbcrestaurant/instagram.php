<?php
/**
 * instagram表示モジュール
 * instagram.php
 */

$args = [
  'numberposts' => 4,
  'category'    => 3
];
$posts_array = get_posts($args);
global $post;
?>

<ul class="instagram__list">
  <?php if($posts_array): foreach( $posts_array as $post ): setup_postdata($post); ?>
    <li>
      <a href="<?php echo the_permalink(); ?>">
        <div class="instagram__list-img">
          <img src="<?php echo first_image(); ?>" alt="<?php the_title(); ?>">
          <?php the_excerpt(); ?>
        </div>
      </a>
    </li>
  <?php endforeach; wp_reset_postdata(); endif; ?> 
</ul>