<?php
/**
 * @package test_plugin
 * @version 1.0.0
 */
/*
Plugin Name: Test Plugin
Plugin URI: #
Description: Basic proficiency test for application for junior wordpress developer position at kinesis.money. The test consist of simple tasks giving the applicant an opportunity to show their technical aptitude, familiarity with wordpress ecosystem, understanding of basic development practices, ability to solve problems and attention to detail.
Author: Amir Khan
Version: 1.0.0
*/
  
function loadMyBlock() {
  wp_enqueue_script(
    'my-new-block',
    plugin_dir_url(__FILE__) . 'test-block.js',
    array('wp-blocks','wp-editor'),
    true
  );
}
   
add_action('enqueue_block_editor_assets', 'loadMyBlock');
