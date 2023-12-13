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
$content = get_field('content');

?>

<section class="content-section">
  <div class="container">
    <div class="wrapper">
      <?php if ($title) { ?><h2 class="section-title"><?php echo $title; ?></h2><?php } ?>
      <?php if ($content) { echo $content; } ?>
    </div>
  </div>
</section>