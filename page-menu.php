<?php get_header(); ?>

  <div class="container-menu">

  <div class='inner-header'>
    <div id='name' class='left'>Jürgen Beck</div>
    <div id='current' class='right'>Current: Helmhaus Zürich Datum etc. (ext. link)</div>
  </div>

  <div class='project-menu'> 
    
    <?php $args = array(
    'post_type'		=> 'post',
    'posts_per_page'	=> -1
    ); ?>

    <?php $current = new WP_Query( $args ); ?>

    <?php while ( $current->have_posts() ) : $current->the_post(); ?>

      <a href='<?php echo get_permalink(); ?>' class='menu-item'>
        <?php echo get_the_title(); ?>
      </a>

    <?php endwhile; wp_reset_query(); ?>
  
  </div> 

  <a href='<?php echo get_site_url() . "/info"; ?>'class='menu-item'>info/contact</a>

  </div>

  <?php get_footer(); ?>