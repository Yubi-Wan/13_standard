<?php
// コンテンツ幅をセット
if ( ! isset( $content_width ) ) {
	$content_width = 723;
}

function custom_theme_setup() {
	//head内にフィードリンクを出力
	add_theme_support( 'automatic-feed-links' );

	//タイトルタグを動的に出力
	add_theme_support( 'title-tag' );

	//ブロックエディター用のCSSを有効化
	add_theme_support( 'wp-block-styles' );

	//埋め込みコンテンツをレスポンシブ対応に
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function myportfolio_scripts() {
	wp_enqueue_style(
		'base-style', // ハンドル名
		get_stylesheet_uri(), // ファイルのパス
		array(), // 依存関係
		'1.0', // バージョン指定
		'all' // メディアタイプ
	);
}
add_action( 'wp_enqueue_scripts', 'myportfolio_scripts' );
