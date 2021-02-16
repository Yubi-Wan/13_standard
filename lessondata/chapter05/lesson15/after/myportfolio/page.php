<?php get_header(); ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-sm">
        <?php if ( have_posts() ) : //もし、投稿が1件以上あったら ?>
            <?php while ( have_posts() ) : //投稿の表示条件を満たす間は繰り返す ?>
            <?php the_post(); //データ1件分を取り出して渡す ?>
            <article <?php post_class(); ?>>
                <h1 class="c-post__title">
                    <?php the_title(); ?>
                </h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php endwhile; //投稿ループ終了 ?>
        <?php endif; //条件分岐終了 ?>
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->
<?php get_footer(); ?>
