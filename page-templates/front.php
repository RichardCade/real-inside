<?php
/*
Template Name: Front
*/
get_header(); ?>

<section class="gradient-background header show-for-medium">

<div class="container">
    <div class="grid align-justify align-middle text-left">
    
      <div class="column medium-12 large-6">
        <h1><strong><?php the_field( 'section_one_title_text' ); ?></strong></h1>
        <hr>
        <h4><?php the_field( 'bookcase_text' ); ?></h4>
        <br>
        <a href="<?php echo esc_url(site_url('/portals')) ?>" role="button" class="button sites-button hollow light">Get started <i class="fas fa-chevron-right" aria-hidden="true"></i></a> <span class="screen-reader-text"><?php echo esc_html_x('Online Portals', 'button', 'FoundationPress') ?></span>
      </div>
    
      <div class="column medium-12 large-4 header-bookcase">
        <?php get_template_part('template-parts/bookcase'); ?>
      </div>
    
    </div>
  </div>

</section>

<section class="container show-for-small-only">

  <div class="grid align-justify align-middle text-left">

    <div class="column">
      <h1><strong><?php the_field( 'section_one_title_text' ); ?></strong></h1>
      <hr>
      <h4><?php the_field( 'bookcase_text' ); ?></h4>
      <br>
      <a href="<?php echo esc_url(site_url('/portals')) ?>" role="button" class="button sites-button">Get started <i class="fas fa-chevron-right" aria-hidden="true"></i></a> <span class="screen-reader-text"><?php echo esc_html_x('Online Portals', 'button', 'FoundationPress') ?></span>
    </div>

    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/hr-portal')) ?>" role="button" class="button sites-button expanded">HR Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('HR Portal', 'button', 'FoundationPress') ?></span>
    </div>

    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/it-portal')) ?>" role="button" class="button sites-button expanded">IT Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('IT Portal', 'button', 'FoundationPress') ?></span>
    </div>

    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/marketing-portal')) ?>" role="button" class="button sites-button expanded">Marketing Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('Marketing Portal', 'button', 'FoundationPress') ?></span>
    </div>

    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/planning-portal')) ?>" role="button" class="button sites-button expanded">Planning Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('Planning Portal', 'button', 'FoundationPress') ?></span>
    </div>

    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/property-portal')) ?>" role="button" class="button sites-button expanded">Property Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('Property Portal', 'button', 'FoundationPress') ?></span>
    </div>

    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/public-relations-portal')) ?>" role="button" class="button sites-button expanded">Public Relations Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('Public Relations Portal', 'button', 'FoundationPress') ?></span>
    </div>

    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/strategy-portal')) ?>" role="button" class="button sites-button expanded">Strategy Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('Strategy Portal', 'button', 'FoundationPress') ?></span>
    </div>

    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/tradesman-portal')) ?>" role="button" class="button sites-button expanded">Tradesman Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('Tradesman Portal', 'button', 'FoundationPress') ?></span>
    </div>
    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/technology-portal')) ?>" role="button" class="button sites-button expanded">Technology Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('Technology Portal', 'button', 'FoundationPress') ?></span>
    </div>
    <div class="column book-button">
      <a href="<?php echo esc_url(site_url('/utilities-portal')) ?>" role="button" class="button sites-button expanded">Utilities Portal</a> <span class="screen-reader-text"><?php echo esc_html_x('Utilities Portal', 'button', 'FoundationPress') ?></span>
    </div>

  </div>

</section>

<div class="container">
  <main class="main-content">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'page' ); ?>
    <?php comments_template(); ?>
    <?php endwhile; ?>
  </main>
</div>


<?php get_footer();
