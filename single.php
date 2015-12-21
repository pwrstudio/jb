<?php get_header(); ?>

<header class='first'>
  <a href='<?php echo get_site_url() . "/menu"; ?>' id='name' class='left'>Jürgen Beck</a>
</header>

  <div class="image-container"></div>
  
  <div class="nav-overlay previous"></div>
  <div class="nav-overlay next"></div>

  <div class="caption"></div>

  <div class="image-list-container">
    <ol>
      <?php if( have_rows('images') ): ?>
        <?php while ( have_rows('images') ) : the_row(); ?>
          <?php $image = get_sub_field('image'); ?>
          <li data-src="<?php echo $image['sizes']['pwr-large']; ?>" data-alt="<?php echo the_sub_field('caption'); ?>"></li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ol>
  </div>
    
<?php get_footer(); ?>    
