<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function custom_post_type_events() {
  
    $labels = array(
      'name'                  => 'Events',
      'singular_name'         => 'Event',
      'menu_name'             => 'Events',
      'name_admin_bar'        => 'Events',
      'archives'              => 'Event Archives',
      'attributes'            => 'Event Attributes',
      'parent_item_colon'     => 'Parent Event:',
      'all_items'             => 'All Events',
      'add_new_item'          => 'Add New Event',
      'add_new'               => 'Add New',
      'new_item'              => 'New Event',
      'edit_item'             => 'Edit Event',
      'update_item'           => 'Update Event',
      'view_item'             => 'View Event',
      'view_items'            => 'View Events',
      'search_items'          => 'Search Event',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Event',
      'uploaded_to_this_item' => 'Uploaded to this Event',
      'items_list'            => 'Events list',
      'items_list_navigation' => 'Events list navigation',
      'filter_items_list'     => 'Filter Events list',
    );
    $args = array(
      'label'                 => 'Event',
      'description'           => 'Event Description',
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-star-filled',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => 'gallery',
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true,
    );
    register_post_type( 'events', $args );
  
  }
  add_action( 'init', 'custom_post_type_events', 0 );