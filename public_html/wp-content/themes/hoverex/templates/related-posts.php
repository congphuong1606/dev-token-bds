<?php
/**
 * The template 'Style 1' to displaying related posts
 *
 * @package WordPress
 * @subpackage HOVEREX
 * @since HOVEREX 1.0
 */

$hoverex_link = get_permalink();
$hoverex_post_format = get_post_format();
$hoverex_post_format = empty($hoverex_post_format) ? 'standard' : str_replace('post-format-', '', $hoverex_post_format);
?><div id="post-<?php the_ID(); ?>" 
	<?php post_class( 'related_item related_item_style_1 post_format_'.esc_attr($hoverex_post_format) ); ?>><?php
	hoverex_show_post_featured(array(
		'thumb_size' => apply_filters('hoverex_filter_related_thumb_size', hoverex_get_thumb_size( (int) hoverex_get_theme_option('related_posts') == 1 ? 'huge' : 'med-avatar' )),
		'show_no_image' => hoverex_get_theme_setting('allow_no_image'),
		'singular' => false,
		'post_info' => '<div class="post_header entry-header">'
							. '<div class="post_categories">'.wp_kses_post(hoverex_get_post_categories('')).'</div>'
							. (in_array(get_post_type(), array('post', 'attachment'))
									? '<span class="post_date"><a href="'.esc_url($hoverex_link).'">'.wp_kses_data(hoverex_get_date()).'</a></span>'
									: '')
						. '</div>'
		)
	);
?></div>