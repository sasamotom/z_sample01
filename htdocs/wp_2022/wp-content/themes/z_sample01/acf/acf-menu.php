<?php
//----------------------------------------------
// カスタムフィールド定義（ACFのGenerate PHPをベースに作成）
//----------------------------------------------
if( function_exists('acf_add_local_field_group') ):
  acf_add_local_field_group(array(
    'key' => 'MENU_content',
    'title' => 'MENU',
    'fields' => array(
      array(
        'key' => 'image',
        'label' => '画像',
        'name' => 'image',
        'type' => 'image',
        'instructions' => '商品画像を設定します。',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => 'jpg,png,gif,svg',
      ),
      array(
        'key' => 'text',
        'label' => '説明文',
        'name' => 'text',
        'type' => 'textarea',
        'instructions' => '説明文を入力します。',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => 4,
        'new_lines' => 'br',
      ),
      array(
        'key' => 'price',
        'label' => '値段（税込）',
        'name' => 'price',
        'type' => 'number',
        'instructions' => '値段を入力します。',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '円（税込）',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
endif;

// if( function_exists('acf_add_local_field_group') ):
//   acf_add_local_field_group(array(
//     'key' => 'newdonuts_content',
//     'title' => 'NEW DONUTS',
//     'fields' => array(
//       array(
//         'key' => 'newdonuts',
//         'label' => 'NEW DONUTSに表示するドーナツ',
//         'name' => 'newdonuts',
//         'type' => 'post_object',
//         'instructions' => 'TOPページに表示する新商品を１つ選択します。',
//         'required' => 0,
//         'conditional_logic' => 0,
//         'wrapper' => array(
//           'width' => '',
//           'class' => '',
//           'id' => '',
//         ),
//         'post_type' => array(
//           0 => 'menu',
//         ),
//         'taxonomy' => '',
//         'allow_null' => 0,
//         'multiple' => 0,
//         'return_format' => 'id',
//         'ui' => 1,
//       ),
//     ),
//     'location' => array(
//       array(
//         array(
//           'param' => 'page',
//           'operator' => '==',
//           'value' => '329',
//         ),
//       ),
//     ),
//     'menu_order' => 0,
//     'position' => 'normal',
//     'style' => 'default',
//     'label_placement' => 'top',
//     'instruction_placement' => 'label',
//     'hide_on_screen' => '',
//     'active' => true,
//     'description' => '',
//     'show_in_rest' => 0,
//   ));
// endif;

//----------------------------------------------
// ショートコード
//----------------------------------------------
// TOPページ用ニュース一覧（新しいものから３つ）
// function getNewDonutsForTop($atts) {
//   // get_field等が使えない場合は何もしない
//   if(!function_exists('get_field')) {
//     return;
//   }
//   $donuts_id = get_field('newdonuts');
//   if (!$donuts_id) {
//     return false;
//   }

//   global $post;
//   $oldpost = $post;
//   $mypost = get_post($donuts_id);
//   if (!$mypost) {
//     return false;
//   }
//   $post = $mypost;
//   $retHtml='<section class="topNew"><div class="container"><div class="twoCols">';
//   $imgPath = esc_url(get_field('image'));
//   $name  = esc_html(get_the_title("","",false));
//   $text  = get_field('text');
//   $price  = esc_html(get_field('price'));
//   setup_postdata($post);

//   $retHtml.='<div class="col"><h2 class="secTtl">NEW DONUTS</h2>';
//   if ($imgPath) {
//     $retHtml.='<div class="pic"><img src="'. $imgPath.'" alt="'.$name.'" '.get_image_size($imgPath).' loading="lazy" /></div>';
//   }
//   $retHtml.='</div>';
//   $retHtml.='<div class="col"><dl class="donutsInfo">';
//   $retHtml.='<dt class="donutsInfo_name">'. $name.'</dt>';
//   $retHtml.='<dd class="donutsInfo_txt">'.$text.'</dd>';
//   $retHtml.='<dd class="donutsInfo_price">¥'.$price.'<span class="-small">（税込）</span></dd>';
//   $retHtml.='</dl></div>';

//   $retHtml.='</div></div></section>';
//   $post = $oldpost;
//   wp_reset_postdata();
//   return $retHtml;
// }
// add_shortcode("newDonutsForTop", "getNewDonutsForTop"); // [newDonutsForTop]で呼び出せる

?>
