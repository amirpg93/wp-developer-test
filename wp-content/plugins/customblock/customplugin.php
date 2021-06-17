<?php
/**
 * @package custom block
 * @version 1.0.0
 */
/*
Plugin Name: custom block
Plugin URI: #
Description: Basic proficiency test for application for junior wordpress developer position at kinesis.money. The test consist of simple tasks giving the applicant an opportunity to show their technical aptitude, familiarity with wordpress ecosystem, understanding of basic development practices, ability to solve problems and attention to detail.
Author: Amir Khan
Version: 1.0.0
*/

// Create a new table
function customplugin_table(){

    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
  
    $tablename = $wpdb->prefix."customplugin";
  
    $sql = "CREATE TABLE $tablename (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        title varchar(255) default NULL,
        subtitle varchar(255) default NULL,
        tagline varchar(255) default NULL,
        sort_description varchar(255) default NULL,
        long_description longtext,
        PRIMARY KEY  (id)
    ) $charset_collate;";
  
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
  
  }
  register_activation_hook( __FILE__, 'customplugin_table' );
  
  // Add menu
  function customplugin_menu() {
  
      add_menu_page("Custom Plugin", "Custom Plugin","manage_options", "myplugin", "displayList",plugins_url('/customblock/img/icon1.png'));
      add_submenu_page("myplugin","All Entries", "All entries","manage_options", "allentries", "displayList");
      add_submenu_page("myplugin","Add new Entry", "Add new Entry","manage_options", "addnewentry", "addEntry");
  
  }
  add_action("admin_menu", "customplugin_menu");
  
  function displayList(){
    include "displaylist.php";
  }
  
  function addEntry(){
    include "addentry.php";
  }
