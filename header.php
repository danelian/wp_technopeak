<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  <?php wp_head(); ?>
</head>

<body <?php echo body_class(); ?>>

	<!-- Header -->
<header class="header" id="header">
  <div class="container">
    <div class="header__container">
      <a href="<?php echo get_home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="technopeak logo"></a>
      <nav class="header__nav" id="burger-menu">
        <div class="header__nav-head">
          <a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="technopeak logo"></a>
          <!-- Burger Close Button -->
          <button type="button" class="burger__close" id="burger-close">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/burger-close.svg" alt="close burger menu">
          </button>
        </div>
        <?php
        wp_nav_menu([
          'theme_location' => 'header',
          'container' => '',
          'menu_class' => 'header__menu',
          'menu_id' => false,
          'echo' => true,
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);
        ?>
        <form role="search" method="get" id="searchForm" action="<?php echo home_url( '/' ) ?>" class="searchform second-search">
          <input class="searchform-input" type="search" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" id="s">
          <button type="submit" role="button" class="searchform-btn" id="searchButton">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z"
                fill="currentColor" />
            </svg>
          </button>
        </form>
        <div class="header__contacts">
          <div class="header__buttons">
            <?php if(get_field('telegram_link', 'options')): ?>
              <a href="<?php the_field('telegram_link', 'options'); ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/telegram.svg" alt="">
              </a>
            <?php endif; ?>
            <?php $email_link = get_field('email_link', 'options');
            if( $email_link ): $email_link_url = $email_link['url']; ?>
              <a href="<?php echo esc_url( $email_link_url ); ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/email.svg" alt="">
              </a>
            <?php endif; ?>
          </div>
          <div class="header__phone">
            <?php 
            $header_phone = get_field('header_phone', 'options');
            if( $header_phone ): 
                $header_phone_url = $header_phone['url'];
                $header_phone_title = $header_phone['title'];
                $header_phone_target = $header_phone['target'] ? $header_phone['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $header_phone_url ); ?>" target="<?php echo esc_attr( $header_phone_target ); ?>"><?php echo esc_html( $header_phone_title ); ?></a>
            <?php endif; ?>
            <?php if (get_field('header_text', 'options')) : ?><p><?php the_field('header_text', 'options'); ?></p><?php endif; ?>
          </div>
        </div>
      </nav>
      <!-- Burger Close Button -->
      <button type="button" class="burger__open" id="burger-open">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/burger-open.svg" alt="open burger menu">
      </button>
    </div>
  </div>
</header>