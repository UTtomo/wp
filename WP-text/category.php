<main class="main">
  <h1 class="ttl01">カテゴリーページ</h1>
  <section class="archive">
    <ul>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <li>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </li>
    <?php endwhile;endif; ?>
    </ul>
    <nav class="pagination-area">
    <?php
    the_posts_pagination( array (
      'prev_text' => 'PREV',
      'next_text' => 'NEXT',
      'mid_size'  => 2
    ) );
    ?>
    </nav>
  </section>
  <section class="sidebar">
    <?php get_sidebar(); ?>
  </section>
</main>
