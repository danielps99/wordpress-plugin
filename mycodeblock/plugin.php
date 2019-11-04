<?php
/**
 * Plugin Name: My code block
 * Author: Daniel
 * Version: 1.0.0
 */
  
function loadMyBlock() {
  wp_enqueue_script(
    'mycodeblock',
    plugin_dir_url(__FILE__) . 'plugin.js',
    array('wp-blocks','wp-editor'),
    true
  );
}
   
add_action('enqueue_block_editor_assets', 'loadMyBlock');