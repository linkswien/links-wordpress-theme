<?php

function has_menschen_von_links($categories)
{
    $category_slugs = [];
    foreach ($categories as $category) {
        array_push($category_slugs, $category->slug);
    }

    return in_array('menschen-von-links', $category_slugs);
}
