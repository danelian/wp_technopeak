<?php

/**
 * service-about Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Load values and assing defaults.
$title = get_field('title');
$features = get_field('features');

?>

<section class="s-features" id="s-features">
  <div class="container">
    <div class="s-features__container">
      <h2 class="section-title"><?php echo $title; ?></h2>
      <?php 
      if ($features) {
        echo '<div class="s-features__list">';
        foreach( $features as $item ) {
          $title = $item['title'];
          $text = $item['text']; 
        ?>
          <div class="feature">
            <div class="feature__icon"></div>
            <?php if ($title) { ?><h2 class="feature__title"><?php echo $title; ?></h2><?php } ?>
            <?php if ($text) { ?><div class="feature__text"><?php echo $text; ?></div><?php } ?>
          </div>
        <?php }
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>