<?php
/*
Plugin Name: Custom Editor Settings
Plugin URI: 
Description: 不必要な見出しを無くし、ブロックをボーダーで囲う。編集時のブロック構造をわかりやすくするCSSの適用など。
Author: Yuki AOI
Version: 0.1
Author URI: https://aoi.ooo
Text Domain: yaoi-custom-editor-settings
*/

add_filter('tiny_mce_before_init', 'custom_editor_settings');

function custom_editor_settings($initArray)
{
    add_editor_style(plugin_dir_url( __FILE__ ) . 'css/editor.css');
    $initArray['block_formats'] = "見出し3=h3; 見出し4=h4; 見出し5=h5; 見出し6=h6; 段落=p; グループ=div;";
    return $initArray;
}