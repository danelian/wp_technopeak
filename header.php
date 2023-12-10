<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  <?php wp_head(); ?>
</head>

<body class="page-template-front-page">

	<!-- Header -->
<header class="header" id="header">
  <div class="container">
    <div class="header__container">
      <a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="technopeak logo"></a>
      <nav class="header__nav" id="burger-menu">
        <div class="header__nav-head">
          <a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="technopeak logo"></a>
          <!-- Burger Close Button -->
          <button type="button" class="burger__close" id="burger-close">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/burger-close.svg" alt="close burger menu">
          </button>
        </div>
        <ul class="header__menu">
          <li><a href="about-us.html">About us</a></li>
          <li><a href="archive-industry.html">Industry</a></li>
          <li><a href="archive-news.html">News</a></li>
          <li><a href="contacts.html">Contacts</a></li>
          <li class="menu-item-has-children">
            <a href="archive-solutions.html">Solutions</a>
            <ul class="sub-menu">
              <li><a href="single-solutions.html">IT Infrastructure Support</a></li>
              <li><a href="single-solutions.html">IT Infrastructure Support</a></li>
              <li><a href="single-solutions.html">IT Infrastructure Support</a></li>
              <li><a href="single-solutions.html">IT Infrastructure Support</a></li>
              <li><a href="single-solutions.html">IT Infrastructure Support</a></li>
              <li><a href="single-solutions.html">IT Infrastructure Support</a></li>
              <li><a href="single-solutions.html">IT Infrastructure Support Support</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="archive-services.html">Services</a>
            <ul class="sub-menu">
              <li><a href="single-services.html">IT Infrastructure Support</a></li>
              <li><a href="single-services.html">IT Infrastructure Support</a></li>
              <li><a href="single-services.html">IT Infrastructure Support</a></li>
              <li><a href="single-services.html">IT Infrastructure Support</a></li>
              <li><a href="single-services.html">IT Infrastructure Support</a></li>
              <li><a href="single-services.html">IT Infrastructure Support</a></li>
              <li><a href="single-services.html">IT Infrastructure Support Support</a></li>
            </ul>
          </li>
        </ul>
        <form role="search" method="get" id="searchForm" action="#" class="searchform second-search">
          <input class="searchform-input" type="search" placeholder="Search" value="" name="s" id="s">
          <button type="submit" role="button" class="searchform-btn" id="searchButton">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z" fill="currentColor"/>
            </svg>              
          </button>
        </form>
        <div class="header__contacts">
          <div class="header__buttons">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/telegram.svg" alt=""></a>
            <a href="mailto:#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/email.svg" alt=""></a>
          </div>
          <div class="header__phone">
            <a href="tel:+78127482253">+7 (812) 748-22-53</a>
            <p>Support is available 24/7</p>
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