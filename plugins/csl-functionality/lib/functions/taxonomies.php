<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function custom_events_taxonomy() {
  
    $labels = array(
      'name'                       => 'Event Types',
      'singular_name'              => 'Event Type',
      'menu_name'                  => 'Event Types',
      'all_items'                  => 'All Event Types',
      'parent_item'                => 'Parent Event Type',
      'parent_item_colon'          => 'Parent Event Type:',
      'new_item_name'              => 'New Event Type Name',
      'add_new_item'               => 'Add New Event Type',
      'edit_item'                  => 'Edit Event Type',
      'update_item'                => 'Update Event Type',
      'view_item'                  => 'View Event Type',
      'separate_items_with_commas' => 'Separate Event Types with commas',
      'add_or_remove_items'        => 'Add or remove Event Types',
      'choose_from_most_used'      => 'Choose from the most used',
      'popular_items'              => 'Popular Event Types',
      'search_items'               => 'Search Event Types',
      'not_found'                  => 'Not Found',
      'no_terms'                   => 'No Event Types',
      'items_list'                 => 'Event Types list',
      'items_list_navigation'      => 'Event Types list navigation',
    );
    $rewrite = array(
      'slug'                       => 'events',
      'with_front'                 => true,
      'hierarchical'               => false,
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'rewrite'                    => $rewrite,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'event_type', array( 'event' ), $args );
  
  }
  add_action( 'init', 'custom_events_taxonomy', 0 );

  // Register Custom Taxonomy
function custom_featured_tax() {
  
    $labels = array(
      'name'                       => 'Gallery Features',
      'singular_name'              => 'Gallery Feature',
      'menu_name'                  => 'Gallery Feature',
      'all_items'                  => 'All Gallery Features',
      'parent_item'                => 'Parent Item',
      'parent_item_colon'          => 'Parent Item:',
      'new_item_name'              => 'New Item Name',
      'add_new_item'               => 'Add New',
      'edit_item'                  => 'Edit Item',
      'update_item'                => 'Update Item',
      'view_item'                  => 'View Item',
      'separate_items_with_commas' => 'Separate items with commas',
      'add_or_remove_items'        => 'Add or remove items',
      'choose_from_most_used'      => 'Choose from the most used',
      'popular_items'              => 'Popular Items',
      'search_items'               => 'Search Items',
      'not_found'                  => 'Not Found',
      'no_terms'                   => 'No items',
      'items_list'                 => 'Items list',
      'items_list_navigation'      => 'Items list navigation',
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => false,
      'show_tagcloud'              => false,
    );
    register_taxonomy( 'featured', array( 'event' ), $args );
  
  }
  add_action( 'init', 'custom_featured_tax', 0 );
  
  