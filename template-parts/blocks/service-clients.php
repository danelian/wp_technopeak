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
$clients = get_field('clients');

?>

<section class="s-clients" id="s-clients">
  <div class="container">
    <h2 class="section-title"><?php echo $title; ?></h2>
    <?php 
    if ($clients) {
      echo '<div class="clients__list">';
      foreach( $clients as $client ) {
        $logo = $client['logo'];
      ?>
        <div class="col">
          <?php if ($logo) { ?><img src="<?php echo $logo; ?>" alt="logo"><?php } ?>
        </div>
      <?php }
      echo '</div>';
    }
    ?>
  </div>
</section>