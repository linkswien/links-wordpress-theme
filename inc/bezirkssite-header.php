<?php

function get_bezirksseiten_header($categories)
{
    $category_slugs = [];
    foreach ($categories as $category) {
        array_push($category_slugs, $category->slug);
    }

    $site_url =  get_site_url();

    if (in_array('brigittenau', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-20 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/brigittenau.jpg)"></div>';
    } else if (in_array('alsergrund', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/alsergrund.jpg)"></div>';
    } else if (in_array('dobling', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/waehring.jpg)"></div>';
    } else if (in_array('donaustadt', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/donaustadt.jpg)"></div>';
    } else if (in_array('favoriten', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/favoriten.jpg)"></div>';
    } else if (in_array('floridsdorf', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/floridsdorf.jpg)"></div>';
    } else if (in_array('hernals', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/hernals.jpg)"></div>';
    } else if (in_array('hietzing', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/penzing.jpg)"></div>';
    } else if (in_array('innere-stadt', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/innere_stadt.jpg)"></div>';
    } else if (in_array('josefstadt', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/josefstadt.jpg)"></div>';
    } else if (in_array('landstrasse', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/landstrasse.jpg)"></div>';
    } else if (in_array('leopoldstadt', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/leopoldstadt.jpg)"></div>';
    } else if (in_array('liesing', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/liesing.jpg)"></div>';
    } else if (in_array('margareten', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/margareten.jpg)"></div>';
    } else if (in_array('mariahilf', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/mariahilf.jpg)"></div>';
    } else if (in_array('meidling', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/meidling.jpg)"></div>';
    } else if (in_array('neubau', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/neubau.jpg)"></div>';
    } else if (in_array('ottakring', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/ottakring-scaled.jpg)"></div>';
    } else if (in_array('penzing', $category_slugs)) {
        return '<div class="wp-block-cover has-background-dim-10 has-background-dim is-position-center-center taller" style="background-image:url(' . $site_url . '/wp-content/uploads/2020/09/penzing.jpg)"></div>';
    }
}
