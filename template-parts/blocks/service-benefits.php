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
$benefits = get_field('benefits');

?>

<section class="s-benefits" id="s-benefits">
  <div class="container">
    <h2 class="section-title"><?php echo $title; ?></h2>
    <?php 
    if ($benefits) {
      echo '<div class="s-benefits__list">';
      foreach( $benefits as $item ) {
        $icon = $item['icon'];
        $title = $item['title'];
        $text = $item['text']; 
      ?>
        <div class="benefit">
          <?php if ($icon) { ?><div class="benefit__icon"><img src="<?php echo $icon; ?>" alt=""></div><?php } ?>
          <?php if ($title) { ?><h2 class="benefit__title"><?php echo $title; ?></h2><?php } ?>
          <?php if ($text) { ?><div class="benefit__text"><?php echo $text; ?></div><?php } ?>
        </div>
      <?php }
      echo '</div>';
    }
    ?>
  </div>
</section>