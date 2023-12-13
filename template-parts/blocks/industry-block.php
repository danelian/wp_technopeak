<?php

/**
 * industry-block Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Load values and assing defaults.
$title = get_field('title');
$text = get_field('text');
$image = get_field('image');
$i_about_title = get_field('i_about_title');
$i_about_content = get_field('i_about_content');
$i_about_features = get_field('i_about_features');

?>

<section class="si-section">
  <div class="container">
    <div class="si-head">
      <div class="si-head__heading">
        <?php if ($title) { ?><h1 class="section-title"><?php echo $title; ?></h1><?php } ?>
        <?php if ($text) { echo $text; } ?>
      </div>
      <div class="si-head__blur"></div>
      <img src="<?php echo $image ?>" class="si-head__image" alt="">
    </div>
    <div class="si-about">
      <?php if ($i_about_title) { ?><h2 class="section-title"><?php echo $i_about_title; ?></h2><?php } ?>
      <div class="si-about__container">
        <?php if ($i_about_content) { ?><div class="si-about__content"><?php echo $i_about_content; ?></div><?php } ?>
        <?php 
        if ($i_about_features) {
          echo '<div class="si-about__features">';
          foreach( $i_about_features as $item ) {
            $ia_title = $item['title'];
            $ia_text = $item['text']; 
          ?>
            <div class="feature">
              <div class="feature__icon"></div>
              <?php if ($ia_title) { ?><h2 class="feature__title"><?php echo $ia_title; ?></h2><?php } ?>
              <?php if ($ia_text) { ?><div class="feature__text"><?php echo $ia_text; ?></div><?php } ?>
            </div>
          <?php }
          echo '</div>';
        }
        ?>
      </div>
    </div>
  </div>
</section>