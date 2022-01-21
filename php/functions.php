<?php


function teva_add_emphasis($value)
{
    if (is_string($value)) {
        if (!is_admin()) {
            $value = preg_replace('/\*([^*]*)\*/', "<em>$1</em>", $value);
            $value = str_replace('|', '<br>', $value);
        }
    }
    return $value;
}

// Apply to all fields.
add_filter('the_title', 'teva_add_emphasis', 10, 3);


function teva_add_emphasis_to_acf($value, $post_id, $field)
{
    return teva_add_emphasis($value);
}

//add_filter('acf/load_value', 'teva_add_emphasis_to_acf', 10, 3); //default
add_filter('acf/load_value/type=text', 'teva_add_emphasis_to_acf', 10, 3);
add_filter('acf/load_value/type=textarea', 'teva_add_emphasis_to_acf', 10, 3);
//add_filter('acf/load_value/type=page_link', 'teva_add_emphasis_to_acf', 10, 3);
//add_filter('acf/load_value/type=wysiwyg', 'teva_add_emphasis_to_acf', 10, 3);


?>