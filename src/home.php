<?php
 /*
    トップページに表示するコンテンツ
 */
?>
<?php get_header(); ?>
<div class="content">
  <main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php get_template_part('loop-content'); ?>
    <?php endwhile; endif; ?>

    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '<i class="fas fa-angle-left"></i>',
      'next_text' => '<i class="fas fa-angle-right"></i>'
      ) ); ?>

  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
