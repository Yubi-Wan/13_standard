<?php get_header();  ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-flex">
            <div class="l-contents">
                <?php if ( have_posts() ) : //もし、投稿が1件以上あったら ?>
                    <?php while ( have_posts() ) : //投稿の表示条件を満たす間は繰り返す ?>
                    <?php the_post(); //データ1件分を取り出して渡す ?>
                    <article <?php post_class(); ?>>
                        <header class="c-post__header">
                            <div class="c-post__meta">
                                <span class="posted-on">
                                    <time class="entry-date published">
	                                    <?php the_time( 'Y年n月j日' ); ?>
                                    </time>
                                </span>
                                <span class="entry-author">
                                    投稿者: <?php the_author(); ?>
                                </span>
                            </div>
                            <h1 class="c-post__title">
	                            <?php the_title(); ?>
                            </h1>
                        </header>
                        <div class="c-post__content">
	                        <?php the_content(); ?>
                        </div>
                        <footer class="c-post__footer">
                            <span class="cat-tags-links">
                                <span class="cat-links">
	                                <?php the_category( '&nbsp;' ); ?>
                                </span>
                                <span class="tags-links">
	                                <?php the_tags( '<span class="tags-links">', '&nbsp;', '</span>' ); ?>
                                </span>
                            </span>
                        </footer>
                    </article>
                    <?php endwhile; //投稿ループ終了 ?>
	                <?php the_post_navigation(); ?>
                <?php endif; //条件分岐終了 ?>
            </div>
	        <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->
<?php get_footer(); ?>
