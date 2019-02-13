<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">

<?php if ( have_rows( 'flex' ) ): $count = 1; ?>
  <?php while ( have_rows( 'flex' ) ): the_row(); ?>
    <?php
      if ( get_row_layout() == 'banner' ):                include(locate_template('layouts/banner.php'));
      elseif ( get_row_layout() == 'standard_content' ):  include(locate_template('layouts/standard.php'));
      elseif ( get_row_layout() == 'split_section' ):     include(locate_template('layouts/split.php'));
      elseif ( get_row_layout() == 'post_type_grid' ):    include(locate_template('layouts/grid.php'));
      elseif ( get_row_layout() == 'slider' ):            include(locate_template('layouts/slider.php'));
      elseif ( get_row_layout() == 'donate' ):            include(locate_template('layouts/donate.php'));
      endif; $count++; // End of layout types
    ?>
  <?php endwhile; ?>
<?php endif; // End of flexible field content ?>

</div>

<?php // get_sidebar(); ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
