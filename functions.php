<?php
/**
* CSS/JS読み込み
*/
function register_stylesheet()
{ //読み込むCSSを登録する
    wp_register_style('style', get_template_directory_uri().'/css/style.min.css');
}
function add_stylesheet()
{ //登録したCSSを以下の順番で読み込む
    register_stylesheet();
    wp_enqueue_style('style', '', array(), '', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

//Using jQuery Google API
function modify_jquery()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, '3.5.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');

function register_script()
{ //読み込むJSを登録する
    wp_register_script('script', get_template_directory_uri().'/js/script.min.js');
}
function add_script()
{ //登録したJSを以下の順番で読み込む
    register_script();
    wp_enqueue_script('script', '', array(), '', true);
}
add_action('wp_print_scripts', 'add_script');

/**
* 管理画面から消去するメニュー
*/
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
  remove_menu_page( 'edit.php' ); // 投稿
  remove_menu_page( 'edit-comments.php' ); // コメント
}

/**
* ショートコードを使ったphpファイルの呼び出し方法
*/
function my_php_Include($params = array())
{
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(STYLESHEETPATH . "/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');