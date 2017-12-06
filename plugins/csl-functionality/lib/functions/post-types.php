<?php
/**
 * EVENTS POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...


// EVENT posts
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

  // STORY Posts
function custom_story_type() {
  
    $labels = array(
      'name'                  => 'Story Types',
      'singular_name'         => 'Story Type',
      'menu_name'             => 'Story Types',
      'name_admin_bar'        => 'Story Type',
      'archives'              => 'Story Archives',
      'attributes'            => 'Story Attributes',
      'parent_item_colon'     => 'Parent Story:',
      'all_items'             => 'All Stories',
      'add_new_item'          => 'Add New Story',
      'add_new'               => 'Add New',
      'new_item'              => 'New Story',
      'edit_item'             => 'Edit Story',
      'update_item'           => 'Update Story',
      'view_item'             => 'View Story',
      'view_items'            => 'View Stories',
      'search_items'          => 'Search Story',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Story',
      'uploaded_to_this_item' => 'Uploaded to this Story',
      'items_list'            => 'Stories list',
      'items_list_navigation' => 'Stories list navigation',
      'filter_items_list'     => 'Filter Stories list',
    );
    $args = array(
      'label'                 => 'Story Type',
      'description'           => 'Story Type Description',
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor' ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-admin-post',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
    );
    register_post_type( 'story_type', $args );
  
  }
  add_action( 'init', 'custom_story_type', 0 );

  // NEWS Posts
function custom_news_type() {
  
    $labels = array(
      'name'                  => 'News Types',
      'singular_name'         => 'News Type',
      'menu_name'             => 'Article Types',
      'name_admin_bar'        => 'Article Type',
      'archives'              => 'Article Archives',
      'attributes'            => 'Item Article Attributes',
      'parent_item_colon'     => 'Parent Article:',
      'all_items'             => 'All Articles',
      'add_new_item'          => 'Add New Article',
      'add_new'               => 'Add New',
      'new_item'              => 'New Article',
      'edit_item'             => 'Edit Article',
      'update_item'           => 'Update Article',
      'view_item'             => 'View Article',
      'view_items'            => 'View Articles',
      'search_items'          => 'Search Article',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Article',
      'uploaded_to_this_item' => 'Uploaded to this Article',
      'items_list'            => 'Articles list',
      'items_list_navigation' => 'Articles list navigation',
      'filter_items_list'     => 'Filter Articles list',
    );
    $args = array(
      'label'                 => 'News Type',
      'description'           => 'News Type Description',
      'labels'                => $labels,
      'supports'              => array( 'title' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-media-document',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
    );
    register_post_type( 'news', $args );
  
  }
  add_action( 'init', 'custom_news_type', 0 );