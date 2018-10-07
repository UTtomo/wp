

<?php
/* Template Name: index */
get_header(); ?>

<!-- Main theme -->
<div class="container">
<?php
if (have_posts()) : while (have_posts()) : the_post();
//例えば下記のように、カテゴリによってdivのクラス名を変えたりできる
//投稿がカテゴリ「1」に属していれば、CSSクラス"post-cat-one"のdivを、
//それ以外なら、CSSクラス"post"のdivを表示
      if (in_category('1')) { ?>
      <div class="post-cat-one">
      <?php } else{ ?>
      <div class="post">
      <?php } ?>
<!-- //タイトルとパーマリンクを表示 -->
        <h1 class="theme-title"><?php the_title(); ?></h1>
<!-- //日時を表示 -->
        <small class="info"><?php the_time('Y年n月j日'); ?></small>
<!-- //カテゴリをカンマ区切りで表示 -->
        <p class="postmetadata info"><?php the_category(', '); ?></p>
<!-- //投稿本文を表示 -->
        <div class="entry text-dark"><?php the_content(); ?></div>
        <div class="previous"><?php previous_post_link('%link', '%title'); ?></div>
         <div class="next"><?php next_post_link('%link', '%title'); ?></div>
        </div>
<?php endwhile; else: ?>
      <p>記事が見つかりませんでした。</p>
<?php endif; ?>
</div>
<?php  get_sidebar(); ?>
</div>

<?php get_footer(); ?>
