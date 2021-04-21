<?php

function get_bezirksseiten_header_image($categories)
{
    $category_slugs = [];
    foreach ($categories as $category) {
        array_push($category_slugs, $category->slug);
    }

    $site_url =  get_site_url();

    if (in_array('brigittenau', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/brigittenau.jpg';
    } else if (in_array('alsergrund', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/alsergrund.jpg';
    } else if (in_array('dobling', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/waehring.jpg';
    } else if (in_array('donaustadt', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/donaustadt.jpg';
    } else if (in_array('favoriten', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/favoriten.jpg';
    } else if (in_array('floridsdorf', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/floridsdorf.jpg';
    } else if (in_array('hernals', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/hernals.jpg';
    } else if (in_array('hietzing', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/penzing.jpg';
    } else if (in_array('innere-stadt', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/innere_stadt.jpg';
    } else if (in_array('josefstadt', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/josefstadt.jpg';
    } else if (in_array('landstrasse', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/landstrasse.jpg';
    } else if (in_array('leopoldstadt', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/leopoldstadt.jpg';
    } else if (in_array('liesing', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/liesing.jpg';
    } else if (in_array('margareten', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/margareten.jpg';
    } else if (in_array('mariahilf', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/mariahilf.jpg';
    } else if (in_array('meidling', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/meidling.jpg';
    } else if (in_array('neubau', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/neubau.jpg';
    } else if (in_array('ottakring', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/ottakring-scaled.jpg';
    } else if (in_array('penzing', $category_slugs)) {
        return $site_url . '/wp-content/uploads/2020/09/penzing.jpg';
    }
}
