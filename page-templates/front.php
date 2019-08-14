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
        <h3><?php the_field( 'bookcase_text' ); ?></h3>
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

  <?php get_template_part('template-parts/mobile-bookcase'); ?>

</section>

<div class="container">
  <main class="main-content">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'page' ); ?>
    <?php comments_template(); ?>
    <?php endwhile; ?>
  </main>
</div>

<?php get_template_part('template-parts/get-in-touch'); ?>

<?php get_footer();
