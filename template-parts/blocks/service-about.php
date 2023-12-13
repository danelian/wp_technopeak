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
$text = get_field('text');
$row = get_field('row');
$image = get_field('image');

?>

<section class="s-about" id="s-about">
  <div class="container">
    <div class="s-about__container">
      <div class="s-about__content">
        <h2 class="section-title"><?php echo $title; ?></h2>
        <?php echo $text; ?>
        <?php 
        if ($row) {
          echo '<div class="row">';
          foreach( $row as $col ) {
            $title = $col['title'];
            $text = $col['text']; 
          ?>
            <div class="col">
              <?php if ($title) { ?><h3><?php echo $title; ?></h3><?php } ?>
              <?php if ($text) { ?><p><?php echo $text; ?></p><?php } ?>
            </div>
          <?php }
          echo '</div>';
        }
        ?>
      </div>
      <img src="<?php echo $image ?>" class="s-about__image" alt="image">
    </div>
  </div>
</section>