<?php
/*
Plugin Name: Events
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW events
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_event' );
add_action( 'admin_init', 'my_admin_event' );
add_action( 'save_post', 'add_event_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function', 1 );
add_action( 'init', 'create_my_taxonomies_ev', 0 );

function create_event() {
    register_post_type( 'events',
        array(
            'labels' => array(
                'name' => 'Events',
                'singular_name' => 'Event',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Event',
                'edit' => 'Edit',
                'edit_item' => 'Edit Event',
                'new_item' => 'New Event',
                'view' => 'View',
                'view_item' => 'View Event',
                'search_items' => 'Search Events',
                'not_found' => 'No Events found',
                'not_found_in_trash' => 'No Events found in Trash',
                'parent' => 'Parent Event'
            ),
 
            'public' => true,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'oww-dashboard.png', __FILE__ ),
            'has_archive' => true
        )
    );
}
function my_admin_event() {
    add_meta_box( 'event_meta_box',
        'Event Details',
        'display_event_meta_box',
        'events', 'normal', 'high'
    );
}
?>
<?php
function display_event_meta_box( $event ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $event_location = esc_html( get_post_meta( $event->ID, 'event_location', true ) );
    $event_blurb = esc_html( get_post_meta( $event->ID, 'event_blurb', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Event Location</td>
            <td><input type="text" size="80" name="event_location_name" value="<?php echo $event_location; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Event Blurb</td>
            <td><input type="text" size="80" name="event_blurb_name" value="<?php echo $event_blurb; ?>" /></td>
        </tr>
    </table>
    <?php
}
?>
<?php
function add_event_fields( $event_id, $event ) {
    // Check post type for events
    if ( $event->post_type == 'events' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['event_location_name'] ) && $_POST['event_location_name'] != '' ) {
            update_post_meta( $event_id, 'event_location', $_POST['event_location_name'] );
        }
        if ( isset( $_POST['event_blurb_name'] ) && $_POST['event_blurb_name'] != '' ) {
            update_post_meta( $event_id, 'event_blurb', $_POST['event_blurb_name'] );
        }
    }
}
?>
<?php
function include_template_function( $template_path ) {
    if ( get_post_type() == 'events' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-events.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-events.php';
            }
        }
        elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-events.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-events.php';
 
            }
        }
    }
    return $template_path;
}
?>
<?php
function create_my_taxonomies_ev() {
    register_taxonomy(
        'events_event_month',
        'events',
        array(
            'labels' => array(
                'name' => 'Event Month',
                'add_new_item' => 'Add New Event Month',
                'new_item_name' => "New Event Month"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}
?>