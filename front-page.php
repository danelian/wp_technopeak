<?php 
/**
 * Template Name: Home
 */
get_header(); ?>

<section class="hero">
  <div class="container">
    <div class="hero__container">
      <h1 class="page-title"><?php the_field('hero_title'); ?></h1>
      <p><?php the_field('hero_text'); ?></p>
      <?php 
      $hero_link = get_field('hero_link');
      if( $hero_link ): 
          $hero_link_url = $hero_link['url'];
          $hero_link_title = $hero_link['title'];
          $hero_link_target = $hero_link['target'] ? $hero_link['target'] : '_self';
          ?>
          <a class="button" href="<?php echo esc_url( $hero_link_url ); ?>" target="<?php echo esc_attr( $hero_link_target ); ?>">
            <?php echo esc_html( $hero_link_title ); ?>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.51346 1.50002L17.0135 1.50002C17.8419 1.50002 18.5135 2.17159 18.5135 3.00002L18.5135 16.5C18.5135 17.3284 17.8419 18 17.0135 18C16.185 18 15.5135 17.3284 15.5135 16.5V6.62134L3.93198 18.2028C3.34619 18.7886 2.39645 18.7886 1.81066 18.2028C1.22487 17.617 1.22487 16.6673 1.81066 16.0815L13.3921 4.50002L3.51346 4.50002C2.68503 4.50002 2.01346 3.82844 2.01346 3.00002C2.01346 2.17159 2.68503 1.50002 3.51346 1.50002Z" fill="currentColor"/>
            </svg>
          </a>
      <?php endif; ?>

      <?php if( have_rows('hero_benefits') ): ?>
        <div class="hero__benefits">
        <?php while( have_rows('hero_benefits') ): the_row(); ?>
          <?php $benefit = get_sub_field('benefit'); ?>
          <div class="hero-benefit">
            <div class="hero-benefit__head">
              <div class="hero-benefit__icon">
                <img src="<?php echo $benefit['icon']; ?>" alt="">
              </div>
              <h2 class="hero-benefit__title"><?php echo $benefit['title']; ?></h2>
            </div>
            <div class="hero-benefit__text"><?php echo $benefit['text']; ?></div>
          </div>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <img src="<?php the_field('hero_bg_desktop'); ?>" class="frontpage-desktop-bg" alt="background image">
  <img src="<?php the_field('hero_bg_mobile'); ?>" class="frontpage-mobile-bg" alt="background image">
</section>

<section class="aboutbl">
  <div class="container">
    <div class="aboutbl__container">
      <div class="aboutbl__col">
        <h2 class="section-title"><?php the_field('aboutbl_details_title'); ?></h2>
        <?php if( have_rows('aboutbl_details') ): ?>
          <div class="aboutbl__details">
          <?php $count = 0; while( have_rows('aboutbl_details') ): the_row(); ?>
            <?php $detail = get_sub_field('detail'); $count++; ?>
            <div class="aboutbl-detail">
              <div class="aboutbl-detail__number"><?php echo $count; ?></div>
              <div class="aboutbl-detail__content">
                <h3><?php echo $detail['title']; ?></h3>
                <p><?php echo $detail['text']; ?></p>
              </div>
              <img src="<?php echo $detail['image']; ?>" class="aboutbl-detail__image" alt="<?php $detail['title']; ?>">
            </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="aboutbl__col">
        <h2 class="section-title"><?php the_field('aboutbl_advantages_title'); ?></h2>
        <?php if( have_rows('aboutbl_advantages') ): ?>
          <div class="aboutbl__benefits">
          <?php while( have_rows('aboutbl_advantages') ): the_row(); ?>
            <?php $advantage = get_sub_field('advantage'); ?>
            <div class="benefit">
              <div class="benefit__icon">
                <img src="<?php echo $advantage['icon']; ?>" alt="">
              </div>
              <h2 class="benefit__title"><?php echo $advantage['title']; ?></h2>
              <div class="benefit__text"><?php echo $advantage['text']; ?></div>
            </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="fclients">
  <div class="container">
    <div class="heading">
      <h2 class="section-title">Information for clients</h2>
    </div>
    <div class="line-decor"></div>
    <div class="fclients__list">
      <div class="point">
        <div class="point__icon"></div>
        <div class="point__text">
          <p>A credit score or credit score is an assessment in the form of a number that reflects a person or debtor, about the possibility of you paying off credit in the next loan application.</p>
        </div>
      </div>
      <div class="point">
        <div class="point__icon"></div>
        <div class="point__text">
          <p>Your credit score can determine how much your loan and credit card applications are approved. Not only that, with a credit score you are given the freedom to choose the bank and lender that provides the best offer.</p>
        </div>
      </div>
      <div class="point">
        <div class="point__icon"></div>
        <div class="point__text">
          <p>Credit can be complicated. But it doesn't have to be. Learning responsible credit behavior can set you up to reach your goals. Find out what's in your Equifax credit report, how your credit scores are calculated, and how to get on track in your credit journey.</p>
        </div>
      </div>
      <div class="point">
        <div class="point__icon"></div>
        <div class="point__text">
          <p>Life is a series of milestones, and when it comes to finances, knowledge is your most valuable asset. If you're planning to buy a home, purchase a car, or take out a loan, find out what potential lenders are looking for.</p>
        </div>
      </div>
      <div class="point">
        <div class="point__icon"></div>
        <div class="point__text">
          <p>Personal credit scoring is the application of financial risk forecasting. It becomes an even important task as financial institutions have been experiencing serious competition and challenges.</p>
        </div>
      </div>
      <div class="point">
        <div class="point__icon"></div>
        <div class="point__text">
          <p>Every business is singular, and every customer interaction is a highly personalized 1:1 proposition. But in each instance, our goal is simple: To work with our customers to create data-driven solutions that are as personal as they are profitable at every point along their customer’s journey.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="newsbl">
  <div class="container">
    <div class="heading">
      <h2 class="section-title">NEWS</h2>
      <a href="news.html" class="button-icon-arrow">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.51346 1.50002L17.0135 1.50002C17.8419 1.50002 18.5135 2.17159 18.5135 3.00002L18.5135 16.5C18.5135 17.3284 17.8419 18 17.0135 18C16.185 18 15.5135 17.3284 15.5135 16.5V6.62134L3.93198 18.2028C3.34619 18.7886 2.39645 18.7886 1.81066 18.2028C1.22487 17.617 1.22487 16.6673 1.81066 16.0815L13.3921 4.50002L3.51346 4.50002C2.68503 4.50002 2.01346 3.82844 2.01346 3.00002C2.01346 2.17159 2.68503 1.50002 3.51346 1.50002Z" fill="currentColor"/>
        </svg>
      </a>
    </div>
    <div class="newsbl__cards">
      <a href="single-news.html" class="ncard">
        <h3 class="ncard__title">Personal credit</h3>
        <p>Personal credit scoring is the application of financial risk forecasting. It becomes an even important task as financial institutions have been experiencing serious competition and challenges.</p>
        <div class="ncard__date">13.05.2023</div>
        <div class="link-witharrow">
          inspect
          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.9396 6.89978C15.9396 7.45207 15.4919 7.89978 14.9396 7.89978L0.999972 7.89978C0.447688 7.89978 -2.76062e-05 7.45206 -2.75441e-05 6.89978C-2.74819e-05 6.34749 0.447688 5.89978 0.999973 5.89978L14.9396 5.89978C15.4919 5.89978 15.9396 6.3475 15.9396 6.89978Z" fill="currentColor"/>
            <path d="M16.5098 7.56066C16.0954 7.9257 15.4234 7.9257 15.009 7.56066L8.44917 1.78288C8.03472 1.41784 8.03472 0.826 8.44917 0.460963C8.86361 0.0959248 9.53556 0.0959245 9.95001 0.460963L16.5098 6.23874C16.9243 6.60378 16.9243 7.19562 16.5098 7.56066Z" fill="currentColor"/>
            <path d="M16.5098 6.45039C16.0954 6.08535 15.4234 6.08535 15.009 6.45039L8.44916 12.2282C8.03472 12.5932 8.03472 13.185 8.44916 13.5501C8.86361 13.9151 9.53556 13.9151 9.95001 13.5501L16.5098 7.77231C16.9243 7.40727 16.9243 6.81543 16.5098 6.45039Z" fill="currentColor"/>
          </svg>            
        </div>
        <div class="ncard__blur"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ncard-img.jpg" class="ncard__image" alt="Personal credit">
      </a>
      <a href="single-news.html" class="ncard">
        <h3 class="ncard__title">Personal credit</h3>
        <p>Personal credit scoring is the application of financial risk forecasting. It becomes an even important task as financial institutions have been experiencing serious competition and challenges.</p>
        <div class="ncard__date">13.05.2023</div>
        <div class="link-witharrow">
          inspect
          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.9396 6.89978C15.9396 7.45207 15.4919 7.89978 14.9396 7.89978L0.999972 7.89978C0.447688 7.89978 -2.76062e-05 7.45206 -2.75441e-05 6.89978C-2.74819e-05 6.34749 0.447688 5.89978 0.999973 5.89978L14.9396 5.89978C15.4919 5.89978 15.9396 6.3475 15.9396 6.89978Z" fill="currentColor"/>
            <path d="M16.5098 7.56066C16.0954 7.9257 15.4234 7.9257 15.009 7.56066L8.44917 1.78288C8.03472 1.41784 8.03472 0.826 8.44917 0.460963C8.86361 0.0959248 9.53556 0.0959245 9.95001 0.460963L16.5098 6.23874C16.9243 6.60378 16.9243 7.19562 16.5098 7.56066Z" fill="currentColor"/>
            <path d="M16.5098 6.45039C16.0954 6.08535 15.4234 6.08535 15.009 6.45039L8.44916 12.2282C8.03472 12.5932 8.03472 13.185 8.44916 13.5501C8.86361 13.9151 9.53556 13.9151 9.95001 13.5501L16.5098 7.77231C16.9243 7.40727 16.9243 6.81543 16.5098 6.45039Z" fill="currentColor"/>
          </svg>            
        </div>
        <div class="ncard__blur"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ncard-img.jpg" class="ncard__image" alt="Personal credit">
      </a>
      <a href="single-news.html" class="ncard">
        <h3 class="ncard__title">Personal credit</h3>
        <p>Personal credit scoring is the application of financial risk forecasting. It becomes an even important task as financial institutions have been experiencing serious competition and challenges.</p>
        <div class="ncard__date">13.05.2023</div>
        <div class="link-witharrow">
          inspect
          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.9396 6.89978C15.9396 7.45207 15.4919 7.89978 14.9396 7.89978L0.999972 7.89978C0.447688 7.89978 -2.76062e-05 7.45206 -2.75441e-05 6.89978C-2.74819e-05 6.34749 0.447688 5.89978 0.999973 5.89978L14.9396 5.89978C15.4919 5.89978 15.9396 6.3475 15.9396 6.89978Z" fill="currentColor"/>
            <path d="M16.5098 7.56066C16.0954 7.9257 15.4234 7.9257 15.009 7.56066L8.44917 1.78288C8.03472 1.41784 8.03472 0.826 8.44917 0.460963C8.86361 0.0959248 9.53556 0.0959245 9.95001 0.460963L16.5098 6.23874C16.9243 6.60378 16.9243 7.19562 16.5098 7.56066Z" fill="currentColor"/>
            <path d="M16.5098 6.45039C16.0954 6.08535 15.4234 6.08535 15.009 6.45039L8.44916 12.2282C8.03472 12.5932 8.03472 13.185 8.44916 13.5501C8.86361 13.9151 9.53556 13.9151 9.95001 13.5501L16.5098 7.77231C16.9243 7.40727 16.9243 6.81543 16.5098 6.45039Z" fill="currentColor"/>
          </svg>            
        </div>
        <div class="ncard__blur"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ncard-img.jpg" class="ncard__image" alt="Personal credit">
      </a>
      <a href="single-news.html" class="ncard">
        <h3 class="ncard__title">Personal credit</h3>
        <p>Personal credit scoring is the application of financial risk forecasting. It becomes an even important task as financial institutions have been experiencing serious competition and challenges.</p>
        <div class="ncard__date">13.05.2023</div>
        <div class="link-witharrow">
          inspect
          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.9396 6.89978C15.9396 7.45207 15.4919 7.89978 14.9396 7.89978L0.999972 7.89978C0.447688 7.89978 -2.76062e-05 7.45206 -2.75441e-05 6.89978C-2.74819e-05 6.34749 0.447688 5.89978 0.999973 5.89978L14.9396 5.89978C15.4919 5.89978 15.9396 6.3475 15.9396 6.89978Z" fill="currentColor"/>
            <path d="M16.5098 7.56066C16.0954 7.9257 15.4234 7.9257 15.009 7.56066L8.44917 1.78288C8.03472 1.41784 8.03472 0.826 8.44917 0.460963C8.86361 0.0959248 9.53556 0.0959245 9.95001 0.460963L16.5098 6.23874C16.9243 6.60378 16.9243 7.19562 16.5098 7.56066Z" fill="currentColor"/>
            <path d="M16.5098 6.45039C16.0954 6.08535 15.4234 6.08535 15.009 6.45039L8.44916 12.2282C8.03472 12.5932 8.03472 13.185 8.44916 13.5501C8.86361 13.9151 9.53556 13.9151 9.95001 13.5501L16.5098 7.77231C16.9243 7.40727 16.9243 6.81543 16.5098 6.45039Z" fill="currentColor"/>
          </svg>            
        </div>
        <div class="ncard__blur"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ncard-img.jpg" class="ncard__image" alt="Personal credit">
      </a>
      <a href="single-news.html" class="ncard">
        <h3 class="ncard__title">Personal credit</h3>
        <p>Personal credit scoring is the application of financial risk forecasting. It becomes an even important task as financial institutions have been experiencing serious competition and challenges.</p>
        <div class="ncard__date">13.05.2023</div>
        <div class="link-witharrow">
          inspect
          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.9396 6.89978C15.9396 7.45207 15.4919 7.89978 14.9396 7.89978L0.999972 7.89978C0.447688 7.89978 -2.76062e-05 7.45206 -2.75441e-05 6.89978C-2.74819e-05 6.34749 0.447688 5.89978 0.999973 5.89978L14.9396 5.89978C15.4919 5.89978 15.9396 6.3475 15.9396 6.89978Z" fill="currentColor"/>
            <path d="M16.5098 7.56066C16.0954 7.9257 15.4234 7.9257 15.009 7.56066L8.44917 1.78288C8.03472 1.41784 8.03472 0.826 8.44917 0.460963C8.86361 0.0959248 9.53556 0.0959245 9.95001 0.460963L16.5098 6.23874C16.9243 6.60378 16.9243 7.19562 16.5098 7.56066Z" fill="currentColor"/>
            <path d="M16.5098 6.45039C16.0954 6.08535 15.4234 6.08535 15.009 6.45039L8.44916 12.2282C8.03472 12.5932 8.03472 13.185 8.44916 13.5501C8.86361 13.9151 9.53556 13.9151 9.95001 13.5501L16.5098 7.77231C16.9243 7.40727 16.9243 6.81543 16.5098 6.45039Z" fill="currentColor"/>
          </svg>            
        </div>
        <div class="ncard__blur"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ncard-img.jpg" class="ncard__image" alt="Personal credit">
      </a>
      <a href="single-news.html" class="ncard">
        <h3 class="ncard__title">Personal credit</h3>
        <p>Personal credit scoring is the application of financial risk forecasting. It becomes an even important task as financial institutions have been experiencing serious competition and challenges.</p>
        <div class="ncard__date">13.05.2023</div>
        <div class="link-witharrow">
          inspect
          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.9396 6.89978C15.9396 7.45207 15.4919 7.89978 14.9396 7.89978L0.999972 7.89978C0.447688 7.89978 -2.76062e-05 7.45206 -2.75441e-05 6.89978C-2.74819e-05 6.34749 0.447688 5.89978 0.999973 5.89978L14.9396 5.89978C15.4919 5.89978 15.9396 6.3475 15.9396 6.89978Z" fill="currentColor"/>
            <path d="M16.5098 7.56066C16.0954 7.9257 15.4234 7.9257 15.009 7.56066L8.44917 1.78288C8.03472 1.41784 8.03472 0.826 8.44917 0.460963C8.86361 0.0959248 9.53556 0.0959245 9.95001 0.460963L16.5098 6.23874C16.9243 6.60378 16.9243 7.19562 16.5098 7.56066Z" fill="currentColor"/>
            <path d="M16.5098 6.45039C16.0954 6.08535 15.4234 6.08535 15.009 6.45039L8.44916 12.2282C8.03472 12.5932 8.03472 13.185 8.44916 13.5501C8.86361 13.9151 9.53556 13.9151 9.95001 13.5501L16.5098 7.77231C16.9243 7.40727 16.9243 6.81543 16.5098 6.45039Z" fill="currentColor"/>
          </svg>            
        </div>
        <div class="ncard__blur"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ncard-img.jpg" class="ncard__image" alt="Personal credit">
      </a>
    </div>
  </div>
</section>
	
<section class="contactusbl">
  <div class="container">
    <div class="contactusbl__container">
      <div class="heading">
        <h2 class="section-title">Contact us for consultation</h2>
        <p>Life is a series of milestones, and when it comes to finances, knowledge is your most valuable asset. If you're planning to buy a home, purchase a car, or take out a loan, find out what potential lenders are looking for.</p>
      </div>
      <div class="form">
        <div class="form-group">
          <input type="text" class="form-input" placeholder="Name">
        </div>
        <div class="form-group">
          <input type="email" class="form-input" placeholder="Email">
        </div>
        <div class="form-group">
          <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
        </div>
        <input type="submit" value="Send" class="button">
        <div class="accept">After clicking the button you agree to the information <a href="#">processing policy</a></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>