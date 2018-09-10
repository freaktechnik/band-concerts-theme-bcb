<?php

namespace BandConcerts\Theme\BCB;

class Theme {
    function add_support()
    {
        add_editor_style([ 'content.css' ]);
    }

    function scripts()
      {
          wp_enqueue_style('bc-style-bcb-content', get_stylesheet_directory_uri().'/content.css', [ 'bc-style-content' ]);
          wp_enqueue_style('bc-style-bcb', get_stylesheet_uri(), [ 'bc-style', 'bc-style-bcb-content' ]);
      }

    function __construct()
    {
          // Suddenly actions.
          add_action('after_setup_theme', [$this, 'add_support']);
          add_action('wp_enqueue_scripts', [$this, 'scripts']);
    }
}

new Theme();
