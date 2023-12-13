<?php

/**
 * service-head Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Load values and assing defaults.
$title = get_field('title');
$text = get_field('text');
$list = get_field('list');
$image = get_field('image');

$link_about = get_field('link_about');
$link_benefits = get_field('link_benefits');
$link_features = get_field('link_features');
$link_clients = get_field('link_clients');

?>

<section class="s-head" id="s-head">
  <div class="container">
    <div class="s-head__container">
      <div class="s-head__content">
        <h1 class="title"><?php echo $title; ?></h1>
        <?php if ($text) : ?><p><?php echo $text ?></p><?php endif; ?>
        <?php 
        if ($list) {
          echo '<ul>';
          foreach( $list as $item ) {
            echo '<li>';
              echo $item['item'];
            echo '</li>';
          }
          echo '</ul>';
        }
        ?>
        <a href="#" class="button">
          Try it
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.51346 1.50002L17.0135 1.50002C17.8419 1.50002 18.5135 2.17159 18.5135 3.00002L18.5135 16.5C18.5135 17.3284 17.8419 18 17.0135 18C16.185 18 15.5135 17.3284 15.5135 16.5V6.62134L3.93198 18.2028C3.34619 18.7886 2.39645 18.7886 1.81066 18.2028C1.22487 17.617 1.22487 16.6673 1.81066 16.0815L13.3921 4.50002L3.51346 4.50002C2.68503 4.50002 2.01346 3.82844 2.01346 3.00002C2.01346 2.17159 2.68503 1.50002 3.51346 1.50002Z" fill="currentColor"/>
          </svg>
        </a>
      </div>
      <img src="<?php echo $image; ?>" alt="image" class="s-head__image">
    </div>
    <div class="s-head__nav">
      <a href="#s-head"><?php echo $title; ?></a>
      <?php if ($link_about) { ?><a href="#s-about">About</a><?php } ?>
      <?php if ($link_benefits) { ?><a href="#s-benefits">Benefits</a><?php } ?>
      <?php if ($link_features) { ?><a href="#s-features">Features</a><?php } ?>
      <?php if ($link_clients) { ?><a href="#s-clients">Clients</a><?php } ?>
    </div>
  </div>
</section>