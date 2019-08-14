<div class="divider get-in-touch">
  <div class="container">
    <div class="grid-x align-justify align-middle">
      <div class="cell large-8">
        <h3 class="text-primary"><strong><?php the_field( 'footer_headline' ); ?></strong></h3>
        <p><?php the_field( 'footer_text' ); ?></p>
      </div>
      <div class="cell large-2">
        <?php $footer_button_link = get_field( 'footer_button_link' ); ?>
        <?php if ( $footer_button_link ) { ?>
        <a href="<?php echo $footer_button_link['url']; ?>" target="<?php echo $footer_button_link['target']; ?>" role="button" class="button sites-button"><i class="fas fa-comment-dots" aria-hidden="true"></i> <?php the_field( 'footer_button_text' ); ?></a>
        <?php } ?>
        <span class="screen-reader-text"><?php echo esc_html_x($footer_button_link['title'], 'button', 'FoundationPress') ?></span>
      </div>
    </div>
  </div>
</div>
