<?php
/*
Template Name: Archives 
*/

get_header();

echo '<div class="content-wrapper">';
echo '<div class="content">';
echo '<h1 class="has-display-2-font-size has-text-align-center has-color-primary-200-color"><span class="has-color-primary-900-color">engel</span>  <span class="has-color-primary-800-color">News</span></h1>';



$obj = get_queried_object();
$obj->slug;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 999,
    'category_name' => $obj->slug
);

$query = new WP_Query($args);

$tax = 'category';
$terms = get_terms($tax);
$count = count($terms);

if ($count > 0) :
    echo '<span class="categories caption">';
    echo '<a class="category">' . __('Alle', 'engelwaedi') . '</a>';

    foreach ($terms as $term) {
        $cat_id = $term->term_id;
        $cat_slug = $term->name;
        $cat_link = get_category_link($cat_id);
        if ($cat_id == 0 or $cat_id == 1 or $cat_id == 16) continue; // skip 'uncategorized'
        if ($obj->slug != $term->slug) {
            echo '<a href="' . $cat_link . '" class="category">' . $cat_slug . '</a>';
        }
    }
    echo '</span>';
endif;
if ($query->have_posts()) :
    echo '<div class="wp-custom-block news">';
    echo '<div class="wp-custom-block news__container">';
    while ($query->have_posts()) : $query->the_post();
        get_template_part('template-parts/blocks/news-post');
    endwhile;
    echo '</div>';
    echo '</div>';
endif;
echo '</div>';
echo '</div>';
get_footer();
