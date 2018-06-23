<?php
function remove_p_on_images($content){
//画像のみpタグで囲わない
    return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
add_filter('the_content', 'remove_p_on_images');
?>

<?php

/**
 * ウィジェットエリアを定義します。
 */
register_sidebar(array(

  'name'          => 'cafeサイトのサイドバー',
  'id'            => 'primary-widget-area',
  'description'   => 'サイドバーに表示されるウィジェットエリアです。',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',

));