<?php
/**
 * Custom Guteberg functions
 */

 function colby_gutenberg_default_colors() {
     add_theme_support('editor-color-palette',
     
     array(
         array(
             'name' => 'white',
             'slug' => 'white',
             'color' => '#ffffff'
         ),
         array(
            'name' => 'black',
            'slug' => 'black',
            'color' => '#000000'
         ),
         array(
            'name' => 'Dark Blue',
            'slug' => 'blue',
            'color' => '#12223E'
         ),
         array(
            'name' => 'Dark Blue Gray',
            'slug' => 'blue-gray',
            'color' => '#1E2D37'
         ),
         array(
            'name' => 'Gray',
            'slug' => 'gray',
            'color' => '#A0A9AF'
         ),
         array(
            'name' => 'Baige',
            'slug' => 'baige',
            'color' => '#FBF8EA'
         ),
         array(
            'name' => 'Brown',
            'slug' => 'brown',
            'color' => '#C0885B'
         ),
         array(
            'name' => 'Red',
            'slug' => 'red',
            'color' => '#cf2e2e'
         ),
         array(
            'name' => 'Amber',
            'slug' => 'amber',
            'color' => '#fcb900'
         ),
         array(
            'name' => 'Light Green',
            'slug' => 'light-green',
            'color' => '#7bdcb5'
         ),
         array(
            'name' => 'Green',
            'slug' => 'green',
            'color' => '#00d084'
         ),
         array(
            'name' => 'Cyan Blue',
            'slug' => 'cyan-blue',
            'color' => '#0693e3'
         ),
        )
    );
 }

 add_action('init', 'colby_gutenberg_default_colors');